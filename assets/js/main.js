import '../css/main.css';
let forms = document.forms.add;
for (let form in forms) {
    form.addEventListener('submit', function(e){
        e.preventDefault();
        let id = this.elements.busket.dataset.id;
        let fd = new FormData();
        fd.append('id', id);
        fetch('/', {
            method:'post',
            body: fd
        }).then(response => response.text())
            .then(text => console.log(text))
    })
}
