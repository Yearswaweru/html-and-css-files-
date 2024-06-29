const form = document.querySelector('form');
		form.addEventListener('submit', (e) => {
			e.preventDefault();
			const name = document.querySelector('#name').value;
			const email = document.querySelector('#email').value;
			const feedback = document.querySelector('#feedback').value;
			const rating = document.querySelector('#rating').value;

			if (name === '' || email === '' || feedback === '' || rating === '') {
				alert('Please fill in all fields');
				return;
			}

			if (!email.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
				alert('Invalid email address');
				return;
			}

			form.submit();
		});