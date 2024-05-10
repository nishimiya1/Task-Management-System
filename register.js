document.addEventListener('DOMContentLoaded', function () {
    // Your JavaScript code here

    function adjustRoles() {
        var departmentSelect = document.getElementById('DepartmentID');
        var roleSelect = document.getElementById('RoleID');

        // Clear previous options
        roleSelect.innerHTML = '';

        // Get selected department value
        var departmentValue = departmentSelect.value;

        // Add options based on department
        if (departmentValue === '1') { // IT department
            var roles = {
                'Admin': 1,
                'Developer': 2,
                'Designer': 3
            };
            for (var roleName in roles) {
                var option = document.createElement('option');
                option.text = roleName;
                option.value = roles[roleName];
                roleSelect.appendChild(option);
            }
        } else if (departmentValue === '2') { // Marketing department
            var roles = {
                'Marketing Specialist': 4,
                'Marketing Manager': 5
            };
            for (var roleName in roles) {
                var option = document.createElement('option');
                option.text = roleName;
                option.value = roles[roleName];
                roleSelect.appendChild(option);
            }
        } else if (departmentValue === '3') { // HR department
            var roles = {
                'HR Assistant': 6,
                'HR Manager': 7
            };
            for (var roleName in roles) {
                var option = document.createElement('option');
                option.text = roleName;
                option.value = roles[roleName];
                roleSelect.appendChild(option);
            }
        }
    }

    // Call the adjustRoles function when the page loads
    adjustRoles();

    // Add event listener for the change event of the DepartmentID select element
    document.getElementById('DepartmentID').addEventListener('change', adjustRoles);

    // Function to handle form submission
    function handleFormSubmission() {
        document.getElementById('signupForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form data
            var formData = new FormData(this);

            // Include the selected RoleID value in the form data
            var roleSelect = document.getElementById('RoleID');
            formData.append('RoleID', roleSelect.value);

            // Send form data to the server using AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'signupPage.php', true);
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // Handle successful response from the server
                    console.log(xhr.responseText);
                } else {
                    // Handle errors
                    console.error('Request failed. Status: ' + xhr.status);
                }
            };

            xhr.onerror = function () {
                // Handle network errors
                console.error('Request failed. Network error');
            };

            xhr.send(formData); // Send form data to the server
        });
    }

    // Call the handleFormSubmission function when the DOM content is loaded
    handleFormSubmission();
});
