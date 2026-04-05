</div> <!-- closing main-content -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // System-wide helpers
    const getHeaders = () => {
        const token = localStorage.getItem('token');
        if (!token) return null;
        return { 'Authorization': 'Bearer ' + token, 'Content-Type': 'application/json' };
    };
    
    // Base API URL
    const API = 'http://localhost:8000/api/v1';

    function showAlert(msg, type = 'success') {
        const div = document.createElement('div');
        div.className = `alert alert-${type} alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow-sm`;
        div.style.zIndex = '9999';
        div.innerHTML = `
            ${msg}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        document.body.appendChild(div);
        setTimeout(() => div.remove(), 4000);
    }
</script>
</body>
</html>
