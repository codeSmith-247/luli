

function select(element) {
    return document.querySelector(element);
}

function selectAll(element) {
    return document.querySelectorAll(element);
}

function toggle(element, classname = 'active') {
    if(typeof(element) == 'object') {
        element.classList.toggle(classname)
        return true;
    }

    select(element).classList.toggle(classname);
}

function activate(element, classname = 'active') {
    if(typeof(element) == 'object') {
        element.classList.add(classname);
        return true;
    }

    select(element).classList.add(classname);
}

function deactivate(element, classname = 'active') {
    if(typeof(element) == 'object') {
        element.classList.remove(classname);
        return true;
    }

    select(element).classList.remove(classname);
}

function deactivateAll(element, classname = 'active') {
    if(typeof(element) == 'object') {
        element.forEach( elem => {
            elem.classList.remove(classname);
        })
        return true;
    }

    selectAll(element).forEach( elem => {
        elem.classList.remove(classname);
    })
}

function activate_self_n_child(self, child, classname = 'active') {
    activate(self, classname);
    activate(child, classname);
}

function toggle_self_n_child(self, child, classname = 'active') {
    toggle(self, classname);
    toggle(child, classname);
}

function click(element) {
    select(element).click();
    console.log('clicked');
}

function set_value(self) {
    let selected = self.closest('.select').querySelector('.selected');

    let self_image = self.querySelector('img');
    let self_value = self.querySelector('.value');
    
    if(self_image) {
        selected.querySelector('img').setAttribute('src', self_image.getAttribute('src'));
    }

    selected.querySelector('.value').innerText = self_value.innerText;
    selected.setAttribute('value', self_value.innerText);

    selected.click();
}

window.onload = () => {
    activate('body');
}

window.addEventListener('scroll', () => {

    if(document.scrollingElement.scrollTop > 300) {
        activate('nav');
    }
    else deactivate('nav');
});

selectAll('input').forEach(input => {
    if(input.hasAttribute('value') && input.getAttribute('value').length != 0) {
        input.value = input.getAttribute('value');
    }
    console.log('done');
})


function donate() {
    Swal.fire({
        title: 'Amount',
        input: 'text',
        inputAttributes: {
          autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Donate',
        showLoaderOnConfirm: true,
        inputValidator: (amount) => {

            let handler = PaystackPop.setup({

                key: 'pk_test_xxxxxxxxxx', // Replace with your public key
            
                email: '',
            
                amount: amount.replace(/\D/g, '') * 100,
            
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            
                // label: "Optional string that replaces customer email"
            
                onClose: function(){
            
                  alert('Window closed.');
            
                },
            
                callback: function(response){
            
                  let message = 'Payment complete! Reference: ' + response.reference;
            
                  Swal.fire({
                    title: 'Donation Made',
                    icon: 'success'
                  });
            
                }
            
              });
            
            
              handler.openIframe();
            
          },
          allowOutsideClick: () => !Swal.isLoading()
      })
}


window.onload = () => {
    activate('body');
}