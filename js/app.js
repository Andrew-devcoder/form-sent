console.log("Init!");

// inputmask
const form = document.querySelector(".form__body");
const telSelector = form.querySelector('input[type="tel"]');
const inputMask = new Inputmask("+38 (999) 999-99-99");
inputMask.mask(telSelector);

new window.JustValidate(".form__body", {
    rules: {
        name: { required: true },
        lastName: {
            required: true,
            minLength: 3,
            maxLength: 15,
        },
        email: { required: true },
        tel: {
            required: true,
            function: () => {
                const phone = telSelector.inputmask.unmaskedvalue();
                return Number(phone) && phone.length === 10;
            },
        },
        password: { required: true },
    },
    colorWrong: "#ff0f0f",
    messages: {
        name: {
            required: "First Name cannot be empty",
            minLength: "Enter 3 or more characters",
            maxLength: "Input of more than 15 characters is prohibited",
        },
        lastName: {
            required: "Last Name cannot be empty",
            minLength: "Enter 3 or more characters",
            maxLength: "Input of more than 15 characters is prohibited",
        },
        email: {
            email: "Locks like this not an email",
            required: "Locks like this not an email",
        },
        tel: {
            required: "Tel cannot be empty",
            function: "There should be 10 characters here without +38",
        },
        password: {
            required: "Password cannot be empty",
        },
    },

    submitHandler: function (thisForm) {
        let formData = new FormData(thisForm);

        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    console.log("sent");
                }
            }
        };

        xhr.open("POST", "mail.php", true);
        xhr.send(formData);

        thisForm.reset();
    },
});
