const nodemailer = require('nodemailer');
const smtpTransport = require('nodemailer-smtp-transport');

const mailAccountUser = 'info@unique-engr.com'
const mailAccountPass = ''

const trans = nodemailer.createTransport(smtpTransport({
  service: 'unique-engr.com',
  tls: { rejectUnauthorized: false },
  auth: {
    user: mailAccountUser,
    pass: mailAccountPass
  }
}));


module.exports = { trans: trans };