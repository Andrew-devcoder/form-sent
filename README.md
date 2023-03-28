# User Registration Form Submission

Description:
This project involves creating a web form that collects information from users for registration. After the user inputs their information, the form sends the received information to a specified email address for processing.


## Features:

- A simple and user-friendly web form interface for user data input
- Fields for collecting user information, such as name, email address, and contact information
- Form validation to ensure accuracy and completeness of entered information
- Email functionality to send the collected information to a specified email address for processing
- Template setup for formatting collected information in a clear and organized manner


## Technologies:

- HTML, CSS, and JavaScript for developing the client-side
- Server-side PHP programming language for form processing and email functionality
- Composer library for PHP dependency management
- Open Server local server for application deployment and testing
- Overall, this project provides a simple and effective way to collect user information for registration and streamline the registration process.


>We are pleased to present you with a demo version of the project that we have hosted on Github Pages. Follow the [link to the demo version of the project](https://andrew-devcoder.github.io/form-sent/) to check it out.

### To send a form to email, you need to:

- Install Composer on your computer.
- Check if your SMTP provider blocks email sending.
- If you use Windows, check if your OS blocks SMTP sending.
- Install Open Server or any other local server that supports email sending.
- Clone this repository.
- Please note that before using the form, you need to configure it with your email settings in the mail.php file.

### Setting up the mail.php file
* First, you need to **install Composer** on your computer.
Then, check if your SMTP provider blocks the sending of emails.
If you're using Windows, also check if your OS blocks SMTP sending.
Next, you need to install Open Server or any other local server that supports sending email.
Finally, clone this repository.

* Now, let's configure the mail.php file. Please note that it's set up for Gmail.
Find the "try {" block and look for the comment "// config.php".
Edit the values: set your email address (e.g. "example@gmail.com") for $mail->Username and duplicate it for $mail->setFrom(EMAIL_FROM).
In the $mail->addAddress(EMAIL_TO) line, replace the EMAIL_TO argument with the email address where you want to receive the form submissions (you can use your own email for testing purposes).

* Finally, let's discuss the $mail->Password = SMTP_PASSWORD; line.
To create this password, you need to go to your "account" (not your Gmail account but your Google account). In the search bar, type "app passwords". Choose any name to orient yourself. You will be provided with a password that you need to copy and paste instead of SMTP_PASSWORD in the brackets 'your password'. It's important to note that you won't be able to view the password again, so don't close this browser tab until you use it.
### Установка

Для начала нужно ввести в терминал следующую команду:

``composer dumpautoload``



запускаем проект через сервер ( можно использовать например open server )

js скрипт добавлен для проверки валидации и обновления формы

# Frontend Mentor - Intro component with sign up form solution

This is a solution to the [Intro component with sign up form challenge on Frontend Mentor](https://www.frontendmentor.io/challenges/intro-component-with-signup-form-5cf91bd49edda32581d28fd1). Frontend Mentor challenges help you improve your coding skills by building realistic projects.

## Table of contents

-   [Overview](#overview)
    -   [The challenge](#the-challenge)
    -   [Screenshot](#screenshot)
    -   [Links](#links)
-   [My process](#my-process)
    -   [Built with](#built-with)
    -   [What I learned](#what-i-learned)
    -   [Continued development](#continued-development)
    -   [Useful resources](#useful-resources)
-   [Author](#author)
-   [Acknowledgments](#acknowledgments)


## Overview

### The challenge

Users should be able to:

-   View the optimal layout for the site depending on their device's screen size
-   See hover states for all interactive elements on the page
-   Receive an error message when the `form` is submitted if:
    -   Any `input` field is empty. The message for this error should say _"[Field Name] cannot be empty"_
    -   The email address is not formatted correctly (i.e. a correct email address should have this structure: `name@host.tld`). The message for this error should say _"Looks like this is not an email"_

### Screenshot

![](./screenshot.jpg)

Add a screenshot of your solution. The easiest way to do this is to use Firefox to view your project, right-click the page and select "Take a Screenshot". You can choose either a full-height screenshot or a cropped one based on how long the page is. If it's very long, it might be best to crop it.

Alternatively, you can use a tool like [FireShot](https://getfireshot.com/) to take the screenshot. FireShot has a free option, so you don't need to purchase it.

Then crop/optimize/edit your image however you like, add it to your project, and update the file path in the image above.

**Note: Delete this note and the paragraphs above when you add your screenshot. If you prefer not to add a screenshot, feel free to remove this entire section.**

### Links

-   Solution URL: [Add solution URL here](https://your-solution-url.com)
-   Live Site URL: [Add live site URL here](https://your-live-site-url.com)

## My process

### Built with

-   Semantic HTML5 markup
-   CSS custom properties
-   Flexbox
-   CSS Grid
-   Mobile-first workflow
-   [React](https://reactjs.org/) - JS library
-   [Next.js](https://nextjs.org/) - React framework
-   [Styled Components](https://styled-components.com/) - For styles

**Note: These are just examples. Delete this note and replace the list above with your own choices**

### What I learned

Use this section to recap over some of your major learnings while working through this project. Writing these out and providing code samples of areas you want to highlight is a great way to reinforce your own knowledge.

To see how you can add code snippets, see below:

```html
<h1>Some HTML code I'm proud of</h1>
```

```css
.proud-of-this-css {
    color: papayawhip;
}
```

```js
const proudOfThisFunc = () => {
    console.log("🎉");
};
```

If you want more help with writing markdown, we'd recommend checking out [The Markdown Guide](https://www.markdownguide.org/) to learn more.

**Note: Delete this note and the content within this section and replace with your own learnings.**

### Continued development

Use this section to outline areas that you want to continue focusing on in future projects. These could be concepts you're still not completely comfortable with or techniques you found useful that you want to refine and perfect.

**Note: Delete this note and the content within this section and replace with your own plans for continued development.**

### Useful resources

-   [Example resource 1](https://www.example.com) - This helped me for XYZ reason. I really liked this pattern and will use it going forward.
-   [Example resource 2](https://www.example.com) - This is an amazing article which helped me finally understand XYZ. I'd recommend it to anyone still learning this concept.

**Note: Delete this note and replace the list above with resources that helped you during the challenge. These could come in handy for anyone viewing your solution or for yourself when you look back on this project in the future.**

## Author

-   Website - [Add your name here](https://www.your-site.com)
-   Frontend Mentor - [@yourusername](https://www.frontendmentor.io/profile/yourusername)
-   Twitter - [@yourusername](https://www.twitter.com/yourusername)

**Note: Delete this note and add/remove/edit lines above based on what links you'd like to share.**

## Acknowledgments

This is where you can give a hat tip to anyone who helped you out on this project. Perhaps you worked in a team or got some inspiration from someone else's solution. This is the perfect place to give them some credit.

**Note: Delete this note and edit this section's content as necessary. If you completed this challenge by yourself, feel free to delete this section entirely.**




ознакомиться для себя https://getcomposer.org/doc/01-basic-usage.md