document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = btn.closest('.faq-item');
      var isActive = item.classList.contains('active');
      document.querySelectorAll('.faq-item').forEach(function(i) {
        i.classList.remove('active');
      });
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});
