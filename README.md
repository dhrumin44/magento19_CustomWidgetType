# Custom Widget Type Development in Magento 1.9

I will develop a custom widget type which will allow the site administrator to insert the "Print" and "Contact Us"  links as well as custom text on in CMS pages. I will also provide the widget configuration for the links so that the administrator can select which links he/she wants to display in the CMS page.

I assume that you're familiar with the structure of the Magento modules. First, let's see the file structure which we'll need to implement for our custom widget type.

app/etc/modules/Dmn112_Customwidget.xml : It's a file used to enable our custom widget type module.

app/code/local/Dmn112/Customwidget/etc/config.xml : It's a module configuration file.

app/code/local/Dmn112/Customwidget/etc/widget.xml : It's a widget declaration file which is used to declare widget information and parameters.

app/code/local/Dmn112/Customwidget/Model/Options.php : It's a model file which provides the options for the configuration.

app/code/local/Dmn112/Customwidget/Helper/Data.php : It's a file which is just there as per the standards.

app/code/local/Dmn112/Customwidget/Block/Links.php : The display logic for the widget goes here.

# Conclusion

Widgets in Magento provide a way to enrich the front­-end functionality specifically for non­-technical back­-end administrators of the site. Apart from that, Magento allows you to create custom widgets as per your own requirements, which is really easy to set up as well. 

So I hope this module has helped you to grasp the concept of widgets and the development of custom widgets!
