    function showPage(pageId) {
      document.querySelectorAll('.page').forEach(page => {
        page.classList.remove('visible');
      });
      document.getElementById(pageId).classList.add('visible');
    }

    function startRoute() {
      const start = document.getElementById('start').value;
      const destination = document.getElementById('destination').value;
      alert(`Calculating route from "${start}" to "${destination}"...`);
    }