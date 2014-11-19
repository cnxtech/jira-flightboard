var config = require("config");
var expect = require('chai').expect;
var assert = require('chai').assert;
var client = require('webdriverjs').remote({desiredCapabilities: {browserName: 'phantomjs'}});

describe('Test Epics view.', function(){
    before(function(done) {
        var url = config.get("base_url") + "/epics";
        client.init().url(url, done);
    });
 
    describe('Check main page can load.', function(){
        it('should see title', function(done) {
            client.getTitle(function(err, title){
                expect(title).to.have.string('Epics Board');
                done();
            });
        });
        it('should have last time loaded', function(done) {
            client.getText('.last_time', function(err,text) {
                expect(text).to.match(/^Last update: \d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/);
                done();
            });
        });
        it('should have a table', function(done) {
            client.isVisible('table', function(err,resp) {
                assert.isTrue(resp);
                done();
            });
        });
        it('should have a valid summary', function(done) {
            client.getText('.summary', function(err,resp) {
                expect(resp).to.match(/^[a-zA-Z\d]+$/);
                done();
            });
        });
        it('should have a valid image', function(done) {
            client.getAttribute('.image img', 'src', function(err,resp) {
                expect(resp).to.match(/\/web\/img\/[0-9]+\.png$/);
                done();
            });
        });
    });
 
    after(function(done) {
        client.end();
        done();
    });
});
