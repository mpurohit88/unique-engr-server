const sgMail = require('@sendgrid/mail');
sgMail.setApiKey('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');

let contactUsEmail = async (body) => {
    const msg = {
        to: 'info@unique-engr.com',
        from: {
            email: "info@unique-engr.com",
            name: "Mukesh Purohit"
        },
        subject: "Contact US",
        text: body.message,
        html: 'Address: ' + body.address + ' <br />Message: ' + body.message + ' <br />mobileNo: ' + body.number + ' <br />email address: ' + body.email + ' <br />name: ' + body.name,
    };
    try {
        const result = await sgMail.send(msg).catch(error => {
            console.log("catch error: ", error);
        });

        return result;
    } catch (e) {
        console.log('error...', e);
    }
}
module.exports = {
    contactUsEmail
}