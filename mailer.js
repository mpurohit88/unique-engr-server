const sgMail = require('@sendgrid/mail');
sgMail.setApiKey('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');

let contactUsEmail = (body) => {
    const msg = {
        to: 'info@unique-engr.com',
        from: {
            email: "info@unique-engr.com",
            name: "UNIQUE ENGINEERS"
        },
        subject: body.subject,
        text: body.message,
        html: 'Address: ' + body.address + ' <br />Message: ' + body.message + ' <br />mobileNo: ' + body.number + ' <br />email address: ' + body.email + ' <br />name: ' + body.name,
    };
    try {
        sgMail.send(msg);
    } catch (e) {
        console.log('error...', e);
    }
}
module.exports = {
    contactUsEmail
}