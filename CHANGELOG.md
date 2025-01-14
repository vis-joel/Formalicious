Version 3.1.0-pl
- Move to datetime object to prevent forms from breaking when publishing beyond 2038
- Add form action field to which the form will be posted instead of the landingspage (requires latest FormIt.)

Version 3.0.0-pl
- MODX3 Refactor

Version 2.0.5-pl
- Add hidden input field to heading
- Return FormItParameters as array for Fenom usage
- Set properties so they use the hook config
- Update renderForm class so it reuses the settings set from the snippet properties
- Add step count placeholder to step tpl
- Use {assets_url} for default value of system settings
- Remove the requirement for published_from and published_till

Version 2.0.4-pl
- Fixed undefined bug when clicking View in FormIt in overview grid

Version 2.0.3-pl
- Set required integers by default

Version 2.0.2-pl
- Set currentUrl with step=1 when steps are there
- Make the id column on fields visible

Version 2.0.1-pl
--------------------------
- Add sterc extra settings when not existing

Version 2.0.0-pl
--------------------------
- Add form DB fields published_from and published_till to auto (de)publication forms
- Add field answer DB field selected to set default selected
- Rich text support for field description and form email content.
- Steps (navigation) above the form
- New parameter stepRedirect to redirect a step to a non resource ID (if stepRedirect is set to 'request' the step will be redirected to the current REQUEST URL)
- New permissions added
    - formalicious_admin to show/hide admin panel
    - formalicious_tab_fields to show/hide fields tab
    - formalicious_tab_advanced to show/hide advanced tab (formalicious_advanced renamed to formalicious_tab_advanced)
- ExtJS refactored for faster and better UI/UX
    - Step preview fixed
    - Toggleable description, placeholder, required and heading fields for each fieldtype
- RenderForm replaced with FormaliciousRenderForm
- All snippets and chunks are prefixed with Formalicious

Version 1.4.1-pl
--------------------------
- Create database fields on update

Version 1.4.0-pl
--------------------------
- Add field description
- Hide advanced tab based on permissions
- Add heading & description fields
- Add field description
- Change fiarcontent from varchar to text for bigger mails

Version 1.3.1-pl
--------------------------
- Add system setting for disable form saving on install
- Change fiarcontent from varchar to text

Version 1.3.0-pl
--------------------------
- Fixed phptype of some fields in schema of tables (PHP 7 compatibility)
- Added system setting to disable overall form saving functionality
- Added russian lexicon

Version 1.2.1-pl (October 2017)
--------------------------
- Remove the limit from the ContentBlocks input field
- Hide autoreply options when autoreply checkbox is unchecked

Version 1.2.0-pl (August 2nd, 2017)
--------------------------
- Removing default limit from fiaremailto field (#31)
- Add back button to form update view
- Add duplicate option to forms grid (#32)
- Update grid action buttons to use modx font-awesome icons
- Make add step/field buttons more visible
- Add preview option to form fields tab
- Add saveTmpFiles FormIt property to default formTpl
- Add formName FormIt property to default formTpl
- Prefix fiar-attachment field with modx base_path
- Only add email hook when emailto is not empty
- Remove default limit of 20 from field-values grid
- Check for common 'spam,email,redirect' hooks added by Formalicious when saving posthooks
- Add ID field to form-fields grid
- Make sure prehooks are run before the renderForm snippet

Version 1.1.0-pl (April 19th, 2017)
--------------------------
- Fix setting placeholder for stepParam parameter for renderForm
- Show message when trying to display unpublished form (#6)
- Update radio and checkbox chunks to use correct Bootstrap classes (#28)
- Allow emailTpl and fiarTpl to be overwritten with renderForm snippet parameters (#23)
- Add validate and customValidators parameters to renderForm and formTpl (#23)

Version 1.0.1-pl (February 3rd, 2017)
--------------------------
- Added ContentBlocks support (thanks Mark!)
- Fixed installation issues with MODX installations with custom table-prefixes

Version 1.0.0-pl (February 1st, 2017)
--------------------------
- XS-4 New documentation
- XS-11 Changed height of several dialog windows
- XS-12 Spacing adjustments
- XS-19 Gave the default emails a lighter grey
- XS-20 Modified all en/nl lexicons
- XS-21 Fixed inline editing (removed it)

Version 1.0.0-RC2 (January 27th, 2017)
--------------------------
- [#28] Fixed oldstyle actions
- [#29] Improved this very changelog
- [#40] Create a readme
- [#41] New logo for the modmore site!
- [#XS-42] Autoheight for new-field dialog

Version 1.0.0-RC1 (January 26th, 2017)
--------------------------
- [#34] Improved handling of empty fields
- [#37] Radio button # Select # Checkbox options are now required
- [#38] Allowed files are now mentioned
- [#36] Improved default emails
- [#32] Unused description field is now removed
- [#31] Improved placeholder field usage
- [#30] Mention context-NAME in the "Redirect to" field when creating a new form
- [#27] Fixed file upload in multistep form
- [#22] Improved emailTpl
- [#20 + #23 + #35] Improved styling of buttons
- [#17] Fixed category_id fallback
- [#9 + #12] Fixed empty fields in multistep form
- [#13] Fixed email validation
- [#10] Fixed adding parameters not working properly
- [#7] Now shipped with TV
- [#8] Fixed uninstallation proces
- [#4] "Update type" dialog is now bigger
- [#2] Fixed select form-email-field when creating a form
- [#1] Fixed empty field when creating a form
- [#6] Improved adding fields
- [#5] Improved step-creation flow
- [#3] Replaced form-description with "Email header text"

Version 0.6.0 (2016)
--------------------------
- Create form categories
- Ability to create form steps
- Ability to save forms in FormIt (FormIt V2.2.2#) CMP
- Added ability to setup autoresponder in form
- Updated lexicons
