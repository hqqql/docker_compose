FROM ubuntu

ADD jdk-8u311-linux-x64.tar.gz /usr/local

ENV JAVA_HOME /usr/local/jdk1.8.0_311

ADD apache-tomcat-9.0.62.tar.gz /usr/local

EXPOSE 8080

ENTRYPOINT ["/usr/local/apache-tomcat-9.0.62/bin/catalina.sh", "run"]