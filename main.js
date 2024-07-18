var modal = document.getElementById('myModal');

var btn = document.getElementById('joinBetaBtn');

var span = document.getElementsByClassName('close')[0];

btn.onclick = function () {
  modal.style.display = 'block';
};

span.onclick = function () {
  modal.style.display = 'none';
  document.getElementById('emailForm').reset();
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
    document.getElementById('emailForm').reset();
  }
};

document.getElementById('emailForm').addEventListener('submit', function (event) {
  event.preventDefault();

  const email = document.getElementById('email').value;
  const job_title = document.getElementById('job_title').value;
  const fullname = document.getElementById('fullname').value;
  const company_url = document.getElementById('company_url').value;
  const button = document.querySelector('.join');
  const loader = document.createElement('div');
  loader.className = 'loader';
  button.appendChild(loader);
  button.classList.add('button-disabled');

  fetch('https://api.bitvora.com/sales', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      email: email,
      job_title: job_title,
      fullname: fullname,
      company_url: company_url
    })
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then((data) => {
      alert('Thank you! Our team will be in touch with you shortly!');
      document.getElementById('emailForm').reset();
      modal.style.display = 'none';
    })
    .catch((error) => {
      alert('Something went wrong. Please try again later.');
    })
    .finally(() => {
      loader.remove();
      button.classList.remove('button-disabled');
    });
});
