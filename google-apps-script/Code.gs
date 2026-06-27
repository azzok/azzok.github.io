var TO_EMAIL = 'azzok17@gmail.com';

function doPost(e) {
  try {
    var name    = e.parameter.name    || '(no name)';
    var email   = e.parameter.email   || '(no email)';
    var message = e.parameter.message || '(no message)';

    var subject = 'Portfolio Contact: ' + name;
    var body =
      'Name: '    + name    + '\n' +
      'Email: '   + email   + '\n\n' +
      'Message:\n' + message;

    GmailApp.sendEmail(TO_EMAIL, subject, body, {
      replyTo: email,
      name: name
    });

    return ContentService
      .createTextOutput(JSON.stringify({ result: 'success' }))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (err) {
    return ContentService
      .createTextOutput(JSON.stringify({ result: 'error', error: err.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}
