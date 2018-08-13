STRIPE_REACHABILITY_CHECK = function () {
    var NUM_REQUESTS = 10;

    // get set of endpoints to request
    var endpoints = [
        'https://stripe.com/healthcheck/fe',
        'https://vip1-nw-public.stripe.com/healthcheck/fe',
        'https://vip2-nw-public.stripe.com/healthcheck/fe',
        'https://js.stripe.com/healthcheck', // backed by an apiori S3 bucket, not mainland fe
        'https://b.stripecdn.com/healthcheck/fe',
    ];
    var apiEndpoints = [
        'api.stripe.com', // Full list from https://stripe.com/docs/ips
    ];

    endpoints = endpoints.concat(apiEndpoints.map(function(endpoint) {
        return 'https://' + endpoint + '/healthcheck';
    }));

    // parallel array of reachability with number of successes and errors
    var reachabilities = endpoints.map(function() {
        return { successes: 0, failures: 0, total: 0 };
    });

    endpoints.forEach(function(endpoint, index) {
        var reachability = reachabilities[index];

        // request each endpoint NUM_REQUESTS time
        for (var j = 0; j < NUM_REQUESTS; j++) {
            setTimeout(function() {
                    $.ajax({
                        method: "GET",
                        url: endpoint + '?' + Math.random(),

                        // track success and failure
                        success: function() {
                            reachability.total++;
                            reachability.successes++;
                        },

                        error: function() {
                            reachability.total++;
                            reachability.failures++;

                            Raven.captureMessage('Stripe reachability error: ' + endpoint + ' ' + JSON.stringify(reachability), { level: 'error' });
                        }
                    });
                },
                200 * j);
        }
    });
}