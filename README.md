UI.Vendor
=========

This is the Jekyll template for ui.vendor. [more info about Jekyll](http://jekyllrb.com/docs/home/)

Adding a page
-------------
In order to add a page, simply create a file, and save it as `.html`. e.g. `second-page.html`. You will be able to navigate to this page from the root of your site. e.g. if your site is at: `http://www.mysite.com`, in order to navigate to the above page you will need to go to `http://www.mysite.com/second-page.html`

Pretty URLs
-----------
If you like to avoid having `.html` at the end of your url, you would need to create a directory e.g. `second-page`, and place the content of your page in and `index.html` file in that directory. You can then navigate to your page by going to:
`http://www.mysite.com/second-page/`

Template Folder Structure
-------------------------
The diagram below is the folder structure used in this template:

```
.
├── _includes            # include snippets, `banner.html`, `footer.html`, etc.
├── _layouts             # template for ui.vendor
├── assets               # container for all asset files
|   ├── css              # minified CSS stuff, bootstap, etc.
|   ├── fonts            # bootstrap fonts, customized fonts, etc.
|   ├── images           
|   └── js               # minified js libraries, bootstrap, html5shiv, jquery, etc.
├── second-page          # for demonstration purpose of this Readme
|   └── index.html       # for demonstration purpose of this Readme
├── _config.yml          # Jekyll config file, including some global settings
└── index.html           # Site's Homepage
```

Content of your pages
---------------------
Each page in sites that use Jekyll consists of two sections, [Front Matter](http://jekyllrb.com/docs/frontmatter/) which is contained between `---` at the top of the page, and the page content, which is normal html content that should be displayed inside the page template designated by `{{ content }}`

Below are the description and acceptable values for the page Front Matter.

```YAML
layout: landing-nav                  # points to template used for the page under `_layouts` folder
title: "CPCC Theme Landing Page"     # page title
sidebar: true                        # whether page uses sidebar, acceptable values `true`/`false`
logo: false                          # `false` = collapsed header, `true` = expanded header
location: root                       # this value is not used in this templated, might be removed in future
navItems:                            # list of navigation menu items. If only 1 item is included in this 
  - 1: "About CPCC"                  # list, then an `H1` will be used. 
  - 2: "Academics"                   # numbers will be replaced by the url that the item needs to point to
  - 3: "Student Services"            # e.g. "http://cpcc.edu/academics" : "Academics"
  - 4: "Community"                   
  - 5: "Arts"
```
