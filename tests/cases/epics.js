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
        it('should have a table with all headers', function(done) {
            client.isVisible('table', function(err,resp) {
                assert.isTrue(resp);
                done();
            });
        });
    });
 
    after(function(done) {
        client.end();
        done();
    });
});
