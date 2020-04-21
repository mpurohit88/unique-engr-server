const nodemailer = require('nodemailer');

const { trans } = require("./mailtransporter");

const Mailer = function (params) {
    this.address = params.address;
    this.message = params.message;
    this.number = params.phone;
    this.email = params.email;
    this.name = params.name;
};

Mailer.prototype.sendEmail = function () {
    const that = this;

    const mail = {
        from: 'info@unique-engr.com',
        to: 'mpurohit88@gmail.com',
        subject: `Contact Us`,
        html: 'Address: ' + this.address + ' <br />Message: ' + this.message + ' <br />mobileNo: ' + this.number + ' <br />email address: ' + this.email + ' <br />name: ' + this.name,
    }


    trans.sendMail(mail, (err, info) => {
        if (err) {
            console.log(err);

            return "error";
        }

        console.log('Message sent: %s', info.messageId);
        // Preview only available when sending through an Ethereal account
        console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info));

        return "success";
    });
}

module.exports = Mailer;