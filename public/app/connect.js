
angular.module('app')
    .controller('connectController',['$scope', '$http', function($scope, $http)
    {
        $scope.$parent.currentUrl = 'connect';

        $scope.showing = 'voiceMail';

        $scope.show = function(item)
        {
            $scope.showing = item;
        };


        $scope.newInquiry = function(body, name, contactMethod, email, phone) {

            var data = {
                name : name,
                body : body,
                contactMethod : contactMethod,
                email : email,
                phone : phone
            };



            $http.post('/api.v1/connect', data).
                success(function (data, status, headers, config) {
                    $scope.message = data;
                }).
                error(function (data, status, headers, config) {
                    $scope.error = data;
                });

        };


        $scope.helperMessage = 'Please give me as much information about the purpose of your contact as possible. ' +
        'I look forward to hearing from you.';


        $scope.inquiryBodyPlaceholder = 'example: \'I am looking to increase the monthly recurring revenue of my SaaS based business.' +
        'Unfortunately growth has been pretty slow the past few months and I am having trouble increasing my traffic, user base, and my revenue. Looking for a solution that can bring me more quality leads ' +
        'and help my product grow while also being mindful of costs. Would be interested in picking your brain a bit to determine the best approach to these goals.\'';

    }]);



