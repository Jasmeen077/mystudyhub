<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Sidebar toggle
    const toggleBtn = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const content = document.getElementById("content");

    toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");
        content.classList.toggle("collapsed");
    });
</script>