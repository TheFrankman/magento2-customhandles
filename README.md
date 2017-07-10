# Fc_CustomHandles

M1 used to have layout handles so you could customise your templates etc through xml. This module re-adds customer_logged_in and customer_logged_out layout handles to M2

## Usage

Use `fc/custom_handles/view/frontend/layout/customer_logged_in.xml` In order to add different XML based on the logged in / logged out status of your customer.

I've added some default templates in which will add text to demonstrate it's working. It's up to you how you use it. Just override in your theme. 

http://devdocs.magento.com/guides/v2.0/frontend-dev-guide/layouts/layout-extend.html

## Installation

I will regularly tag any changes made to the module although I doubt there will be any. So feel free to use any tagged version of the module rather than dev-master

```
"require": {
...
    "fc/custom_handles": "dev-master"
...
},
"repositories": {
...
    "fc/custom_handles": {
        "type": "vcs",
        "url": "git@github.com:TheFrankman/magento2-customhandles.git"
    },
...
}
```
## Additional Information

This would normally be achieved in M1 using the following markup in local.xml 

```
<customer_logged_in>
    <block type="core/template"
           name="customer.logged.in.template"
           template="page/html/customer-logged-in.phtml" />
</customer_logged_in>

<customer_logged_in>
    <block type="core/template"
           name="customer.logged.out.template"
           template="page/html/customer-logged-out.phtml" />
</customer_logged_in>
```

## License
MIT License

Copyright (c) 2017 Frank Clark

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
