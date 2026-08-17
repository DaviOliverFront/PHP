    window.addEventListener('pageshow', function(event) {
    // Garante que o formulário seja resetado, mesmo vindo do cache (bfcache)
    document.getElementById('luckyForm').reset();
});