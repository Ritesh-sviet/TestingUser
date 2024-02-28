// jQuery(document).ready(function () {
//     console.log("here you are ");
//     jQuery(".forminator-button-submit").on("click", function (event) {
//         event.preventDefault();
//         var formatted_data = {
//             'FirstName': jQuery('[name="name-1-first-name"]').val(),
//             'LastName': jQuery('[name="name-1-last-name"]').val(),
//             'Email': jQuery('[name="email-1"]').val(),
//             'BirthDate': jQuery('[name="date-1"]').val(),
//             'PhoneNumber': jQuery('[name="phone-1"]').val(),
//             'Password': jQuery('[name="password-1"]').val(),
//             'PlanId': 3, // Add your plan ID here
//             // Add more fields as needed
//         };

//         jQuery.ajax({
//             type: 'POST',
//             url: 'https://ms.stagingsdei.com:4034/api/PaymentGateway/ServiceProviderSignUp',
//             data: formatted_data,
//             dataType: 'json', // assuming the API returns JSON
//             success: function (response) {
//                 console.log("inside ifff");
//                 console.log(response.message);
//                 // if (response.statusCode === 400) {
//                 if (response.statusCode === 200) {
//                     // Successful response
//                     console.log('API Response:', response);
//                     // Optionally, you can display a success message to the user
//                     // alert('Your request has been processed successfully.');
//                     jQuery.ajax({
//                         type: 'POST',
//                         url: ajax_param.ajax_url,
//                         data: {
//                             'action': 'wpmudev_registration_change_messsage',
//                             // 'plan_id': 3,
//                             'success_message': response.message,
//                             // 'planAmount': planAmount
//                         }
//                     });
//                 } else {
//                     // Handle API error
//                     console.error('API Error:', response);
//                     // Optionally, you can display an error message to the user
//                     // alert('An error occurred while processing your request. Please try again later.');
//                     jQuery.ajax({
//                         type: 'POST',
//                         url: ajax_param.ajax_url,
//                         data: {
//                             'action': 'wpmudev_registration_change_messsage',
//                             // 'plan_id': 3,
//                             'error_message': response.message,
//                             // 'planAmount': planAmount
//                         }
//                     });
//                 }
//             },
//             error: function (xhr, status, error) {
//                 console.error('API Error:', error);
//                 // Optionally, you can display an error message to the user
//                 // alert('An error occurred while processing your request. Please try again later.');
//             }
//         });
//     });
// });


jQuery(document).ready(function () {
    jQuery(".forminator-button-submit").on("click", function (event) {
        event.preventDefault();

        // Gather form data
        var formData = {
            'FirstName': jQuery('[name="name-1-first-name"]').val(),
            'LastName': jQuery('[name="name-1-last-name"]').val(),
            'Email': jQuery('[name="email-1"]').val(),
            'BirthDate': jQuery('[name="date-1"]').val(),
            'PhoneNumber': jQuery('[name="phone-1"]').val(),
            'Password': jQuery('[name="password-1"]').val(),
            'PlanId': 3, // Add your plan ID here
            // Add more fields as needed
        };

        // AJAX request to the API endpoint
        jQuery.ajax({
            type: 'POST',
            url: 'https://ms.stagingsdei.com:4034/api/PaymentGateway/ServiceProviderSignUp',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response && response.statusCode === 200) {
                    handleResponse(response.message);
                } else {
                    handleResponse(response.message, 'error');
                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', error);
                handleResponse('An error occurred while processing your request. Please try again later.', 'error');
            }
        });
    });

    // Function to handle the response and send message to server
    function handleResponse(message, messageType = 'error') {
        // Send AJAX request to WordPress backend
        jQuery.ajax({
            type: 'POST',
            url: ajax_param.ajax_url,
            data: {
                'action': 'wpmudev_registration_change_message',
                'message': message,
                'messageType': messageType // Pass the message type
            },
            success: function (response) {
                // Handle success if needed
            },
            error: function (xhr, status, error) {
                // console.error('Error sending message to server:', error);
            }
        });
    }
});

