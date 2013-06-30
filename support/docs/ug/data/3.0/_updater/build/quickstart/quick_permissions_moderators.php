<?php
		// The page title
		$page_title = '1.5.5. Assign moderators to forums';

$navigation = array(
	'home' => array('../index.php','phpBB 3.0 Olympus Documentation'),
	'this' => array('../quickstart/quick_permissions_moderators.php','Assign moderators to forums'),
	'prev' => array('../',''),
	'next' => array('../',''),
	'up'   => array('../quickstart/quick_permissions.php','Setting permissions'),
	'toc'  => array('../index.php','phpBB 3.0 Olympus Documentation',array(array('../quickstart/index.php','Quick Start Guide',array(array('../quickstart/quick_requirements.php','Requirements',array()),
			array('../quickstart/quick_installation.php','Installation',array(array('../quickstart/quick_installation_intro.php','Introduction',array()),
			array('../quickstart/quick_installation_requirements.php','Requirements',array()),
			array('../quickstart/quick_installation_database.php','Database settings',array()),
			array('../quickstart/quick_installation_admin.php','Administrator details',array()),
			array('../quickstart/quick_installation_config.php','Configuration file',array()),
			array('../quickstart/quick_installation_advanced.php','Advanced settings',array()),
			)),
			array('../quickstart/quick_settings.php','General settings',array(array('../quickstart/quick_settings_boardsettings.php','Board Settings',array()),
			array('../quickstart/quick_settings_boardfeatures.php','Board Features',array()),
			)),
			array('../quickstart/quick_forums.php','Creating and setting up forums',array()),
			array('../quickstart/quick_permissions.php','Setting permissions',array(array('../quickstart/quick_permissions_types.php','Permission types',array()),
			array('../quickstart/quick_permissions_forum.php','Setting forum permissions',array()),
			array('../quickstart/quick_permissions_manual.php','Manual permissions',array()),
			array('../quickstart/quick_permissions_roles.php','Permissions roles',array()),
			array('../quickstart/quick_permissions_moderators.php','Assign moderators to forums',array()),
			array('../quickstart/quick_permissions_global.php','Setting global permissions',array()),
			)),
			array('../quickstart/quick_support.php','Obtaining support',array()),
			)),
			array('../upgradeguide/index.php','Upgrade Guide',array(array('../upgradeguide/upgrade.php','Upgrading from 2.0 to 3.0',array()),
			array('../upgradeguide/upgrade_general.php','Upgrading from any board software to phpBB3',array(array('../upgradeguide/upgrade_general_requirements.php','Requirements',array()),
			array('../upgradeguide/upgrade_general_preliminary.php','Preliminary steps',array()),
			array('../upgradeguide/upgrade_general_conversion.php','Conversion steps',array()),
			)),
			)),
			array('../adminguide/index.php','Administration Guide',array(array('../adminguide/admin_control_panel.php','The Administration Control Panel',array()),
			array('../adminguide/acp_general.php','General Configuration and Front Page',array(array('../adminguide/acp_general_config.php','Board Configuration',array()),
			array('../adminguide/acp_general_client.php','Client communication',array()),
			array('../adminguide/acp_general_server.php','Server configuration',array()),
			)),
			array('../adminguide/acp_forums.php','Forum Admin',array(array('../adminguide/acp_forums_types.php','Explanation of forum types',array()),
			array('../adminguide/acp_forums_subforums.php','Subforums',array()),
			array('../adminguide/acp_forums_manage.php','Manage forums',array()),
			)),
			array('../adminguide/acp_posting.php','Posting Settings',array(array('../adminguide/acp_posting_bbcodes.php','BBCodes',array()),
			array('../adminguide/acp_posting_pm_settings.php','Private message settings',array()),
			array('../adminguide/acp_posting_topic_icons.php','Topic icons',array()),
			array('../adminguide/acp_posting_smilies.php','Smilies',array()),
			array('../adminguide/acp_posting_censors.php','Word censoring',array()),
			array('../adminguide/acp_attach_settings.php','Attachment Settings',array()),
			array('../adminguide/acp_attach_extensions.php','Manage extensions',array()),
			array('../adminguide/acp_attach_extension_groups.php','Manage extension groups',array()),
			array('../adminguide/acp_attach_orphaned.php','Orphaned attachments',array()),
			)),
			array('../adminguide/acp_users.php','Users Management',array(array('../adminguide/acp_users_manage.php','Manage Users',array()),
			array('../adminguide/acp_users_inactive.php','Inactive Users',array()),
			array('../adminguide/acp_users_permissions.php','Users\' permissions',array()),
			array('../adminguide/acp_users_forum_permissions.php','Users\' forum permissions',array()),
			array('../adminguide/acp_users_custom_profile_fields.php','Custom profile fields',array()),
			array('../adminguide/acp_user_ranks.php','Managing ranks',array()),
			array('../adminguide/acp_user_security.php','User Security',array()),
			)),
			array('../adminguide/acp_groups.php','Group Management',array(array('../adminguide/acp_groups_types.php','Group types',array()),
			array('../adminguide/acp_groups_edit.php','Group attributes',array()),
			array('../adminguide/acp_groups_default.php','Default groups',array()),
			)),
			array('../adminguide/acp_permissions.php','Permission Overload',array(array('../adminguide/acp_permissions_global.php','Global Permissions',array()),
			array('../adminguide/acp_permissions_forumbased.php','Forum Based Permissions',array()),
			array('../adminguide/acp_permissions_roles.php','Permission Roles',array()),
			array('../adminguide/acp_permissions_masks.php','Permission Masks',array()),
			)),
			array('../adminguide/acp_styles.php','Styles',array(array('../adminguide/acp_styles_manage.php','Installing and managing styles',array()),
			array('../adminguide/acp_styles_templates.php','Templates',array()),
			array('../adminguide/acp_styles_themes.php','Themes',array()),
			array('../adminguide/acp_styles_imagesets.php','Imagesets',array()),
			)),
			array('../adminguide/acp_maintenance.php','Board Maintenance',array(array('../adminguide/acp_maintenance_logs.php','Forum Logs',array()),
			array('../adminguide/acp_maintenance_database.php','Database backup and restore',array()),
			array('../adminguide/acp_maintenance_search.php','Search Indexing',array()),
			)),
			array('../adminguide/acp_system.php','System Configuration',array(array('../adminguide/acp_system_updates.php','Checking for updates',array()),
			array('../adminguide/acp_system_spiders.php','Managing Search Robots',array()),
			array('../adminguide/acp_system_mail.php','Mass email',array()),
			array('../adminguide/acp_system_language.php','Language Packs',array()),
			array('../adminguide/acp_system_phpinfo.php','PHP Information',array()),
			array('../adminguide/acp_system_reasons.php','Manage reasons for reporting and denying posts',array()),
			array('../adminguide/acp_system_modules.php','Module Management',array()),
			)),
			)),
			array('../moderatorguide/index.php','Moderator Guide',array(array('../moderatorguide/moderator_edit.php','Editing posts',array()),
			array('../moderatorguide/moderator_modtools.php','Moderation tools',array(array('../moderatorguide/modtools_lock.php','Locking a topic or post',array()),
			array('../moderatorguide/modtools_delete.php','Deleting a topic or post',array()),
			array('../moderatorguide/modtools_move.php','Moving a topic into another forum',array()),
			array('../moderatorguide/modtools_copy.php','Duplicating a topic',array()),
			array('../moderatorguide/modtools_type.php','Announcements and stickies',array()),
			array('../moderatorguide/modtools_split.php','Splitting posts off a topic',array()),
			array('../moderatorguide/modtools_mergetopics.php','Merge topics',array()),
			array('../moderatorguide/modtools_mergeposts.php','Merge posts into another topic',array()),
			)),
			array('../moderatorguide/moderator_queue.php','What is the “Moderation queue”?',array()),
			array('../moderatorguide/moderator_reported.php','What are “Reported posts”?',array()),
			array('../moderatorguide/moderator_mcp.php','The Moderator Control Panel (MCP)',array(array('../moderatorguide/mcp_queue.php','Moderation queue',array()),
			array('../moderatorguide/mcp_reported.php','Reported posts',array()),
			array('../moderatorguide/mcp_forum.php','Forum moderation',array()),
			)),
			)),
			array('../userguide/index.php','User Guide',array(array('../userguide/user_permissions.php','How user permissions affect forum experience',array()),
			array('../userguide/user_registering.php','Registering on a phpBB3 board',array()),
			array('../userguide/user_control_panel.php','Orienting Yourself in the User Control Panel',array(array('../userguide/ucp_overview.php','Overview',array()),
			array('../userguide/ucp_profile.php','Profile',array()),
			array('../userguide/ucp_preferences.php','Preferences',array()),
			array('../userguide/ucp_friends_foes.php','Friends and Foes',array()),
			array('../userguide/ucp_attachments.php','Attachments',array()),
			array('../userguide/ucp_usergroups.php','Usergroups',array()),
			)),
			array('../userguide/user_posting.php','Mastering the Posting Screen',array(array('../userguide/posting_form.php','Posting Form',array()),
			array('../userguide/posting_smilies.php','Smilies',array()),
			array('../userguide/posting_bbcodes.php','BBCodes',array()),
			array('../userguide/posting_options.php','Post Options',array()),
			array('../userguide/posting_attachments.php','Attachments',array()),
			array('../userguide/posting_polls.php','Polls',array()),
			array('../userguide/posting_drafts.php','Drafts',array()),
			)),
			array('../userguide/user_pm.php','Communicate with Private Messages',array(array('../userguide/pm_display.php','Message display',array()),
			array('../userguide/pm_new.php','Composing a new message',array()),
			array('../userguide/pm_folders.php','Message Folders',array()),
			array('../userguide/pm_filters.php','Message filters',array()),
			)),
			array('../userguide/user_search.php','Search - How to Find What You are Looking For',array()),
			array('../userguide/user_memberlist.php','The Memberlist - More Than Meets the Eye',array()),
			)),
			array('../glossary/index.php','Glossary',array(array('../glossary/terms.php','Terms',array()),
			)),
			)),
			
);

ob_start();
?>
<div xmlns="http://www.w3.org/1999/xhtml" class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><span xmlns="" id="quick_permissions_moderators"/>1.5.5. Assign moderators to forums</h3></div><div><div class="authorgroup"><div class="author"><h3 class="author"><span class="othername">zeroK</span></h3></div></div></div></div></div><p>A quite common use case for permissions and roles are forum moderation. phpBB3 makes assigning users as moderators of forums really simple.</p><p>As you might have already guessed, moderation of specific forums is a local setting, so you can find <span class="guilabel">Forum Moderators</span> in the section for <span class="guilabel">Forum Based Permissions</span>. First of all, you will have to select for forum (or forums) you want to assign new moderators to. This form is divided into three areas. In the first one, you can select multiple forums (select multiple by holding down the CTRL button on your keyboard, or cmd (under MacOS X)), where the moderator settings you will set in the following form will only apply to these exact forums. The second area allows you to select only one forum but all the following settings will apply not only to this forum but also all its subforums. Finally, the third area's selection will only affect exactly this forum.</p><p>After selecting the forums and hitting <span class="guilabel">Submit</span>, you will be greeted by a form you should already be familiar with from one of the previous sections in this guide: <a href="quick_permissions_forum.php#img_quick_permissions_select" title="Figure 1.7. Select Groups">Figure 1.7, “Select Groups”</a>. Here you can select the users or groups that should get some kind of moderation power over the selected forums. So go ahead: Select some users and/or groups and hit the <span class="guilabel">Set Permissions</span> button.</p><p>In the next form you can choose, what moderator permissions the selected users/groups should receive. First of all, there are some predefined roles from which you can select:</p><div class="variablelist"><dl><dt><span class="term">Standard Moderator</span></dt><dd><p>A Standard Moderator can approve or disapprove, edit and delete posts, delete or close reports, but not necessarily change the owner of a post. This kind of moderator can also issue warnings and view details of a post.</p></dd><dt><span class="term">Simple Moderator</span></dt><dd><p>A Simple Moderator can edit posts and close and delete reports and can also view post details.</p></dd><dt><span class="term">Queue Moderator</span></dt><dd><p>As a Queue Moderator, you can only approve or disapprove posts that landed in the moderator queue and edit posts.</p></dd><dt><span class="term">Full Moderator</span></dt><dd><p>Full Moderators can do everything moderation-related; they can even ban users.</p></dd></dl></div><div class="figure"><span xmlns="" id="img_quick_permissions_moderator"/><p class="title"><b>Figure 1.10. The Forum Moderator's Permissions</b></p><div class="mediaobject"><img src="../images/quick_start_guide/permissions_moderator.png" alt="The Forum Moderator's Permissions"/><div class="caption"><p>Set the moderator's permissions</p></div></div></div><p>When you're done simply hit <span class="guilabel">Apply all Permissions</span>. All the permissions mentioned here can also be selected from the right side of the form to give you more granular options.</p></div><div class="copyright">© 2006, 2008 phpBB Group — Licensed under the Creative Commons <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Attribution-NonCommercial-ShareAlike 3.0</a> license</div>
<?php

$content = str_replace(' xmlns="http://www.w3.org/1999/xhtml"', '', ob_get_clean());

?>
