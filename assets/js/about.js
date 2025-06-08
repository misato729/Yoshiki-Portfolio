document.addEventListener('DOMContentLoaded', () => {
  const bars = document.querySelectorAll('.bar');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const bar = entry.target;
        const targetWidth = bar.getAttribute('data-width');
        if (targetWidth) {
          bar.style.setProperty('--bar-width', targetWidth);
        }
        observer.unobserve(bar); // 一度だけ実行
      }
    });
  }, {
    threshold: 0.2 // バーが20%表示されたら発火
  });

  bars.forEach(bar => {
    observer.observe(bar);
  });
});
