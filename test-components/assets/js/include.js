// include.js
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("[data-include]").forEach(async (el) => {
    const file = el.getAttribute("data-include");
    const res = await fetch(file);
    if (res.ok) {
      const content = await res.text();
      el.innerHTML = content;
    } else {
      el.innerHTML = `<p>Error loading ${file}</p>`;
    }
  });
});
