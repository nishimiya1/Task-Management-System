function adjustRoles() {
    var departmentSelect = document.getElementById('DepartmentID');
    var roleSelect = document.getElementById('RoleID');

    // Clear previous options
    roleSelect.innerHTML = '';

    // Get selected department value
    var departmentValue = departmentSelect.value;

    // Add options based on department
    if (departmentValue === '1') { // IT department
        var roles = ['Developer', 'Admin', 'Designer'];
        for (var i = 0; i < roles.length; i++) {
            var option = document.createElement('option');
            option.text = roles[i];
            option.value = roles[i];
            roleSelect.appendChild(option);
        }
    } else if (departmentValue === '2') { // Marketing department
        var roles = ['Marketing Specialist', 'Marketing Manager'];
        for (var i = 0; i < roles.length; i++) {
            var option = document.createElement('option');
            option.text = roles[i];
            option.value = roles[i];
            roleSelect.appendChild(option);
        }
    } else if (departmentValue === '3') { // HR department
        var roles = ['HR Assistant', 'HR Manager'];
        for (var i = 0; i < roles.length; i++) {
            var option = document.createElement('option');
            option.text = roles[i];
            option.value = roles[i];
            roleSelect.appendChild(option);
        }
    }
}

// Call the adjustRoles function when the page loads
window.onload = function () {
    adjustRoles();
};