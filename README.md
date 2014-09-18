# Baffin

The Blackburn B-5 Baffin was a 1930's biplane torpedo bomber. It is also the name of The Register-Guard WordPress forms template.

## How to add a new form

#### Creating the form:

* Go to [forms.registerguard.com/admin/](http://forms.registerguard.com/wp-admin/) and log in. 
  * If you don't have a user/pass contact the [web team](mailto:webeditors@registerguard.com).
* Go to the `Forms` panel on the left sidebar and select `New Form`.
* Add a title and description.
* Take a look at the Gravity Forms instructions on this page. They're pretty good.
* After you finish your form make sure to save/update it.

#### Edit the settings:

* Now you need to adjust the `Form Settings`. Click that button at the top of the form editor.
* You probably want the `Description placement` to be on top of the field not, below it.
* You can also change the `Confirmations` screen that the user gets when they submit a form.
  * This is a good place to put a link to submit another form, if necesary. Or you could put a contact email/phone number if the user has any other questions.
* `Notifications` is another important one to edit. This is the email that you (the admin) gets when someone submits a form. You can add/remove emails and the message content.
  * Here you can create custom messages using the form field tags. For example you could put this where the first part displays as text and the part in {} displays the value the user puts in.

```
Your monthly investment is: {monthly investment:30}
```

#### Add it to a post:

* Then create a post (not a page), give it a title and click `Add Form`.
* Select your form and use the default check boxes.
* Click `Insert Form`.
* Go ahead and add a category. Then publish.
* You may want to update the permalink to make the link easier to find.

## More complex features

#### Conditional logic

* If you need to use conditional logic click on the `Advanced` tab in the form editor. This is useful if you want an option to only show up if the user has selected something.
  * Click `Enable Conditional Logic` and set the logic you need.

![condlogic](https://cloud.githubusercontent.com/assets/4853944/4325553/56cc158c-3f66-11e4-8d65-9ff88bfc3ad4.gif)

#### Math (dynamic content in fields)

![math1](https://cloud.githubusercontent.com/assets/4853944/4325611/f0d88f98-3f66-11e4-9a22-9f3335cf1fab.gif)

* If you need to generate some field dynamically based on an equation you simply create your variable fields as numbers.

Number field 1:

![screen shot 2014-09-18 at 12 07 15 pm](https://cloud.githubusercontent.com/assets/4853944/4325664/73a32b54-3f67-11e4-960d-9b3a57f95e37.png)

Number field 2:

![screen shot 2014-09-18 at 12 07 23 pm](https://cloud.githubusercontent.com/assets/4853944/4325665/73a3a5ac-3f67-11e4-92da-d4a9749a2c56.png)


* Create another number field where you want the generated number to go. 
* Click `Enable Calculation` and put in your logic.

![math2](https://cloud.githubusercontent.com/assets/4853944/4325675/89d30368-3f67-11e4-8661-cf884c1df648.gif)