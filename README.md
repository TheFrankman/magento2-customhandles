# Fc_CustomHandles

M1 used to have layout handles so you could customise your templates etc through xml. This module re-adds customer_logged_in and customer_logged_out layout handles to M2

**Fully PSR2 Compliant**

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
