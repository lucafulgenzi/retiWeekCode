let count = 3;

function login(){
    let usernameForm = document.getElementById('username').value;
    let passwordForm = document.getElementById('password').value;

    if( count != 0){
        if ( usernameForm === 'luca' && passwordForm === 'ciao123'){
            alert('Logged');
            count = 3;
            document.getElementById('username').value = '';
            document.getElementById('password').value = '';
            return true;
        } else {
            count--;
            alert('Username or Password not correct\n' + count + ' attempt');
            return false;
        }
    }else{
        alert('Your account was blocked');
    }
}
