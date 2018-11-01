const scriptURL = 'https://script.google.com/macros/s/AKfycbzoQZdJY0slRnYbIH2gJa1YdmmgvFD7Fpo2p7qyNEGeFe6Czq8/exec'
const form = document.forms['email-from-public'];
const alert_sub = document.getElementById('alert_submission');

form.addEventListener('submit', e => {
	// todo disable submit button
	e.preventDefault();
	fetch(scriptURL, {
			method: 'POST',
			body: new FormData(form)
		})
		.then(res => {
			console.log(res);
			// todo enable submit button
			if (res['status'] == 200) {
				alert_sub.classList.remove('alert-danger');
				alert_sub.classList.add('alert-msg');
				alert_sub.innerHTML = 'Message Recieved!!. We will contact you soon';
				form.reset();
			} else {
				alert_sub.classList.remove('alert-msg');
				alert_sub.classList.add('alert-danger');
				alert_sub.innerHTML = 'Error occured.';
			}
		})
		.catch(error => {
			console.error('Error!', error.message);
			alert_sub.classList.remove('alert-msg');
			alert_sub.classList.add('alert-danger');
			alert_sub.innerHTML = 'Error occured.';
			// todo enable submit button
		})
});
