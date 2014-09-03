davidlaing.com
==============

David Laing's blog (WordPress); hosted on Cloud Foundry


### Deploying on Cloud Foundry

* Set DATABASE_URL to the AWS RDS MySQL DB instance
```
cf set-env davidlaing-com DATABASE_URL "mysql://davidlaing_com:XXXXX@laing-org-mysql-rds.cp4te1dz6qi7.us-east-1.rds.amazonaws.com:3306/davidlaing_com?reconnect=true"
```
* Make a SendGrid service `davidlaing-smtp`

* cf push