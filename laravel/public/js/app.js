function onCreateUser_checkConfPassword(){
    let password = document.getElementById('password');
    let conf_password = document.getElementById('conf-password');

    if(password.value === conf_password.value)
        return true;
    else
    {
        conf_password.style.borderColor = 'crimson';
        return false;
    }
}
