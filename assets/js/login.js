const callback = () => {
    const hideLogin = document.getElementById('hide-login');
    const hideSignUp = document.getElementById('hide-signup');
    const loginForm = document.getElementById('login-form');
    const signUpForm = document.getElementById('signup-form');

    hideLogin.addEventListener('click', () => {
        loginForm.style.display = 'none';
        signUpForm.style.display = 'block';
    });

    hideSignUp.addEventListener('click', () => {
        signUpForm.style.display = 'none';
        loginForm.style.display = 'block';
    });
};
  
if (document.readyState === "complete" ||
    (document.readyState !== "loading" && !document.documentElement.doScroll)
    ) {
    callback();
  } else {
    document.addEventListener("DOMContentLoaded", callback);
}