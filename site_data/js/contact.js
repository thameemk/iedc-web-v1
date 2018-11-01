const scriptURLC = 'https://script.google.com/macros/s/AKfycbzoQZdJY0slRnYbIH2gJa1YdmmgvFD7Fpo2p7qyNEGeFe6Czq8/exec'
const formc = document.forms['email-from-public'];
const alert_subc = document.getElementById('alert_submission');

formc.addEventListener('submit', e => {
	// todo disable submit button
	e.preventDefault();
	fetch(scriptURLC, {
			method: 'POST',
			body: new FormData(formc)
		})
		.then(res => {
			console.log(res);
			// todo enable submit button
			if (res['status'] == 200) {
				alert_subc.classList.remove('alert-danger');
				alert_subc.classList.add('alert-msg');
				alert_subc.innerHTML = 'Message Recieved!!. We will contact you soon';
				formc.reset();
			} else {
				alert_subc.classList.remove('alert-msg');
				alert_subc.classList.add('alert-danger');
				alert_subc.innerHTML = 'Error occured.';
			}
		})
		.catch(error => {
			console.error('Error!', error.message);
			alert_subc.classList.remove('alert-msg');
			alert_subc.classList.add('alert-danger');
			alert_subc.innerHTML = 'Error occured.';
			// todo enable submit button
		})
});
