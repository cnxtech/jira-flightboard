%define version ##VERSION##
%define release ##RELEASE##
%define name ##PROJECT##

%define contentdir /var/www/html/jira-dashboard
%define configdir /etc/httpd/conf.d

Summary: Jira Dashboard
Name: %{name}
Version: %{version}
Release: %{release}
License: Shazam
URL: http://www.shazam.com
Group: Applications/Internet
Source: %{name}-%{version}-%{release}.tar.gz
BuildArch: noarch
Requires: php php-pdo memcached php-pecl-memcached

BuildRoot: /tmp/template

%description
Jira dashboard.

%prep

%setup -q

%build

%install
rm -rf $RPM_BUILD_ROOT
mkdir -p -m0755 $RPM_BUILD_ROOT%{contentdir}/%{name}
mkdir -p -m0755 $RPM_BUILD_ROOT%{configdir}
mkdir -p -m0755 $RPM_BUILD_ROOT/etc/init

install -m 755 config/jira-dashboard.conf $RPM_BUILD_ROOT%{configdir}
install -m 755 .htaccess $RPM_BUILD_ROOT%{contentdir}
cp -rp src web vendor config views $RPM_BUILD_ROOT%{contentdir}

%clean
rm -rf $RPM_BUILD_ROOT

%files
%defattr(-,root,root)
%dir %{contentdir}/
%{contentdir}/config
%{contentdir}/src
%{contentdir}/web
%{contentdir}/vendor
%{contentdir}/views
%{contentdir}/.htaccess
%{configdir}/jira-dashboard.conf
%attr(777, apache, apache) %{contentdir}/views/cache

%post

rm -rf %{contentdir}/views/cache/*

/usr/sbin/setsebool -P httpd_can_network_connect 1

restorecon /usr/sbin/sendmail
setsebool -P httpd_can_sendmail 1

service httpd restart

%changelog
