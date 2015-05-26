/**
 * Copyright 2014 Shazam Entertainment Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this 
 * file except in compliance with the License.
 *
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under 
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the specific 
 * language governing permissions and limitations under the License.
 *
 * @author toni lopez <toni.lopez@shazam.com>
 */

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
        it('should have a table', function(done) {
            client.isVisible('table', function(err,resp) {
                assert.isTrue(resp);
                done();
            });
        });
        it('should have a valid summary', function(done) {
            client.getText('.summary', function(err,resp) {
                expect(resp).to.match(/^[a-zA-Z\d\-\s\:\.]+$/);
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
