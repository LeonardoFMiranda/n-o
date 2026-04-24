(() => {
	const STORAGE_KEY = 'ecidade_dark_mode';

	function setDarkMode(enabled) {
		document.body.classList.toggle('dark-mode', enabled);
		localStorage.setItem(STORAGE_KEY, enabled ? '1' : '0');
	}

	function initDarkMode() {
		const saved = localStorage.getItem(STORAGE_KEY);
		if (saved === '1') {
			document.body.classList.add('dark-mode');
		}
	}

	function toggleDarkMode() {
		const enabled = !document.body.classList.contains('dark-mode');
		setDarkMode(enabled);
	}

	window.ecidadeDarkMode = {
		initDarkMode,
		toggleDarkMode,
		setDarkMode,
	};

	document.addEventListener('DOMContentLoaded', initDarkMode);
})();
