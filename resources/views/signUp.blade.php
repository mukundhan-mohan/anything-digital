<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Noto Sans", sans-serif;
}
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 20px;
  background-color: #00B074
}
.container .form {
  border-radius: 30px;
  background-color: #1a1a1a;
  color: #fff;
  max-width: 360px;
  padding: 20px;
}
.form .title {
  color: #00B074;
  font-size: 30px;
  font-weight: 600;
  padding-left: 30px;
  position: relative;
  display: flex;
  align-items: center;
}
.form .title::before {
  content: "";
  position: absolute;
  height: 18px;
  width: 18px;
}
.form .title::after {
  content: "";
  position: absolute;
  height: 20px;
  width: 20px;
  animation: animate 1s linear infinite;
}
.title::before,
.title::after {
  content: "";
  position: absolute;
  border-radius: 50%;
  left: 0px;
  background-color: #00B074;
}
/* Animation */
@keyframes animate {
  from {
        transform: scale(0.9);
        opacity: 1;
    }
  to {
        transform: scale(1.8) ;
        opacity: 0;
    }
}
.form .title-message,
.form .sign-in {
  color: rgba(255, 255, 255, 0.7);
  font-size: 13.5px;
  font-weight: 400;
  margin-top: 8px;
  text-align: center;
}
.form .flex {
  display: flex;
  gap: 8px;
  margin-top: 15px;
}
.form label input{
  background-color: #333;
  color: #fff;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
  font-size: 1rem;
  padding: 15px 8px 15px 8px;
  outline: 0;
  width: 100%;
  margin-bottom: 15px;
}
input::placeholder {
  color: rgba(255, 255, 255, 0.5);
  font-size: 0.9rem;
}
.submit {
  border: none;
  background-color: #00B074;
  margin-top: 10px;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  width: 100%;
}
.submit:hover {
  background-color: #00B074;
}
</style>

<div class="container">
    <form action="#" class="form">
       <h2 class="title">Register</h2>
       <p class="title-message">Signup now and get full access to our app.</p>
       <div class="flex">
         <label>
           <input type="text" placeholder = "first Name" required >
         </label>
         <label>
           <input type="text" placeholder = "last Name" required  >
         </label>
       </div>
       <label>
         <input type="email" placeholder = "Email" required >
       </label>
       <label>
         <input type="password" placeholder = "Password" required >
       </label>
       <label>
         <input type="password" placeholder = "Confirm password" required >
       </label>
       <button class="submit">Submit</button>
       <p class="sign-in">Already have an account ? 
         <a href="#" style="color: #43c7e8">Signin</a>
         </p>
    </form>
 </div>