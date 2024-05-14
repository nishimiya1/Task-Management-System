document.addEventListener('DOMContentLoaded', function () {
    function adjustRoles() {
        var departmentSelect = document.getElementById('DepartmentID');
        var roleSelect = document.getElementById('RoleID');

        // Clear previous options
        roleSelect.innerHTML = '';

        // Get selected department value
        var departmentValue = departmentSelect.value;

        // Add options based on department
        var roles;
        if (departmentValue === '1') { // IT department
            roles = {
                'Admin': 1,
                'Developer': 2,
                'Designer': 3
            };
        } else if (departmentValue === '2') { // Marketing department
            roles = {
                'Marketing Specialist': 4,
                'Marketing Manager': 5
            };
        } else if (departmentValue === '3') { // HR department
            roles = {
                'HR Assistant': 6,
                'HR Manager': 7
            };
        }

        for (var roleName in roles) {
            var option = document.createElement('option');
            option.text = roleName;
            option.value = roles[roleName];
            roleSelect.appendChild(option);
        }
    }

    adjustRoles();

    document.getElementById('DepartmentID').addEventListener('change', adjustRoles);

    function handleFormSubmission() {
        document.getElementById('signupForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = new FormData(this);
            var roleSelect = document.getElementById('RoleID');
            formData.append('RoleID', roleSelect.value);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'signupPage.php', true);
            xhr.onload = function () {
                if (xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        showToastMessage(response.message);
                    } else {
                        showToastMessage(response.message, 'error');
                    }
                } else {
                    console.error('Request failed. Status: ' + xhr.status);
                }
            };

            xhr.onerror = function () {
                console.error('Request failed. Network error');
            };

            xhr.send(formData);
        });
    }

    function showToastMessage(message, type = 'success') {
        var toast = document.createElement('div');
        toast.className = `toast-message ${type === 'error' ? 'error' : ''}`;
        toast.innerHTML = `
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon ${type === 'error' ? 'error' : 'success'}">
                    ${type === 'error' ? '<line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>' : '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>'}
                </svg>
                <p class="message">${message}</p>
            </div>
            <button class="close-toast">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="icon ${type === 'error' ? 'error' : 'success'}">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        `;

        document.body.appendChild(toast);

        toast.querySelector('.close-toast').addEventListener('click', function () {
            toast.remove();
        });

        setTimeout(function () {
            toast.remove();
        }, 5000); // Adjust the delay as needed
    }


    handleFormSubmission();
});
