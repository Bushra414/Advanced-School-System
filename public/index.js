function openTab(tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.add('hidden');
    }
    tablinks = document.getElementsByClassName("tab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove('active');
    }
    document.getElementById(tabName).classList.remove('hidden');
    event.currentTarget.classList.add('active');
}
function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var content = document.getElementById("content");
    var tabTexts = document.querySelectorAll('.tab .tab-text');
    var toggleBtn = document.querySelector('.toggle-btn i');

    sidebar.classList.toggle("collapsed");
    content.classList.toggle("collapsed");

    tabTexts.forEach(function(tabText) {
        tabText.classList.toggle("hidden");
    });

    if (sidebar.classList.contains("collapsed")) {
        toggleBtn.classList.replace("bxs-left-arrow-circle", "bxs-right-arrow-circle");
    } else {
        toggleBtn.classList.replace("bxs-right-arrow-circle", "bxs-left-arrow-circle");
    }
}

function closeModal() {
    document.getElementById('addMarksModal').style.display = 'none';
}

function logoutAndClearData() {
    event.preventDefault(); 
    document.getElementById('logout-form').submit();

    // Clear caches
    if ('caches' in window) {
        caches.keys().then(function(names) {
            for (let name of names) {
                caches.delete(name);
            }
        });
    }
}
function searchStudentName() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("resultsTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // Index 1 is the column for Student Names
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }       
    }
}






