document.addEventListener('DOMContentLoaded', function () {
    const alumniDropdownToggle = document.getElementById('alumniDropdownToggle');
    const alumniDropdown = document.getElementById('alumniDropdown');

    if (alumniDropdownToggle && alumniDropdown) {
        alumniDropdownToggle.addEventListener('click', function () {
            const expanded = alumniDropdownToggle.getAttribute('aria-expanded') === 'true' || false;
            alumniDropdownToggle.setAttribute('aria-expanded', !expanded);
            alumniDropdown.classList.toggle('hidden');
        });
    }
});