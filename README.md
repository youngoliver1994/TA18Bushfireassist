# Bushfire Assist

Bushfire Assist is a website for providing people who live in bushfire prone regions with information about various measures to be taken before, during and after a bushfire. This application also comprises interactive self-assessment tasks which will enable users to educate themselves and raise awareness.

## Motivation

Residents living in bushfire prone regions frequently express disappointment with the lack of awareness and provision of support during times of bushfire; this disregard is also reflected in the current disaster plans in  Australia which scarcely takes into account the disabled community in times of such events. This is a gap which needs to be addressed in a  way such that all those affected have sufficient awareness of bushfires so that they are able to plan and prepare beforehand thus allowing them to persevere in such challenging times.

## Screenshots

![04](https://user-images.githubusercontent.com/70268577/91729054-51c41880-ebe7-11ea-8c1b-bcd231f1a3ee.png)

## Tech Used

Built with WordPress

And several plugins:
  1. Elementor page builder: this plugin is used to design and build web pages.An efficient builder that can quickly edit pages and load them instantly.
  2. Static HTML Output: This plugin is used to implement version control. Through this plug-in, all files in Wordpress can be downloaded locally. Then you can upload these files to GitHub.
  3. All in one WP security: This plug-in is used to enhance the security of the website. It improves the security of the website by checking vulnerabilities, building different levels of firewalls, and other security settings.
  4. Flexible SSL for CloudFlare: This plugin is an important part of enabling Flexible SSL on WordPress, and can prevent infinite redirection loops when loading a WordPress website under Cloudflare's Flexible SSL system. Thereby improving the security of the website.
  5. WP file manager: This plugin allows users to edit, delete, upload, download, compress, copy and paste files and folders directly from the WordPress backend. Let us edit and manage files more easily and quickly.

## Features

**Preparation Plan:** provide comprehensive guidelines to users for helping them to protect their health and property in  various situations, especially for people with disability or have special needs.

**Self Assessment:** assess and consolidate users’ knowledge to improve their awareness of protecting themselves and others from bushfires.

**Know Your Region:** display locations that occur bushfire in real time.

## Deployment

Our domain “bushfireassist.ga” is hosted on AWS (Amazon Web Services) which is a perfect platform for our project as per our requirements. As AWS is a powerful cloud computing platform that allows us to harness the power of Amazon’s superior infrastructure on a pay as you go basis. 

Before we would have begun with the hosting we got a free domain **“bushfireassist.ga”** from **“Freenom”** for 12 months, this could enable us to help with the further development.

After creating a free student account on AWS. We logged into our AWS console and started with hosting by following below steps:-

**Creating Wordpress Bitnami install on AWS**

**Steps:**

  1.	Firstly, we launched an EC2 instance which provides a virtual platform to run the application by using “WordPress by Bitnami” gifted by AWS marketplace.
  2.	Once an instance is launched, and after testing the public ip (http://our-ip/ ) under the address bar of a new browser tab to view your website. We could see your               WordPress site with the default theme as below.     
  ![DD1](https://user-images.githubusercontent.com/70268577/91739647-93f45680-ebf5-11ea-8d17-0a8805532444.png)
  3.  After entering our credentials for the above which is obtained under the **System-log** file under the ec2 instance, we could see the dashboard page.
  The above three steps enable us to install Wordpress on AWS. 

But, next few steps helped in pointing our domain to Wordpress for which we connected our domain to AWS DNS server 


**Adding domain to our Wordpress Site on Amazon Web Services.**
  1.	Firstly we created and associated our Elastic IP for our Wordpress EC2 instance.
  2.	Next, we have connected it with “Route53” which is our Amazon web service DNS management that allows us to route traffic to our EC2 instance. 
  3.	Once adding our domain name on the hosted zone and creating a record for our domain name which provides us with name servers addresses.
  4.	After obtaining the above addresses, we added these nameservers to our registered domain name website which helped in pointing our domain to the AWS Server.
  Hence, enables our domain name to be hosted on AWS and run over the internet.
  ![DD2](https://user-images.githubusercontent.com/70268577/91739651-95258380-ebf5-11ea-83a6-0f4514ad8f1c.png)


## Installation

  1. Enter the domain name in a browser, and add “/wp-admin” after the domain name.
  
  ![05](https://user-images.githubusercontent.com/70268577/91730004-b8960180-ebe8-11ea-9bc1-cc4715dfe95c.png)
  
  2. Enter user name and password in the login page.
  
  ![01](https://user-images.githubusercontent.com/70268577/91729038-4a9d0a80-ebe7-11ea-8613-e0786433154c.png)
  
  3. The backend dashboard of WordPress will be accessed after login. 
  
  ![02](https://user-images.githubusercontent.com/70268577/91729042-4c66ce00-ebe7-11ea-96a9-a2d9620f8b26.png)
  
  4. Open the Elementor in the top toolbar at top of the screen.
  
  ![2 5](https://user-images.githubusercontent.com/70268577/91729052-4ffa5500-ebe7-11ea-9dba-20f7ef037648.png)
  
  5. Then the layout and content of the website can be edited with  the Elementor.
  
  ![03](https://user-images.githubusercontent.com/70268577/91729048-4f61be80-ebe7-11ea-929e-870d16c7bed9.png)

## License

MU © Apocalypse

