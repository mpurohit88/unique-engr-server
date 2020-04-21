const nodemailer = require('nodemailer');
const smtpTransport = require('nodemailer-smtp-transport');

const mailAccountUser = 'unique-engr.com'
const mailAccountPass = ''

const trans = nodemailer.createTransport(smtpTransport({
  service: 'unique-engr.com',
  // service: 'GMAIL',
  tls: { rejectUnauthorized: false },
  auth: {
    user: mailAccountUser,
    pass: mailAccountPass
  }
}));


module.exports = { trans: trans };