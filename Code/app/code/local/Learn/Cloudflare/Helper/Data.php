<?php
class Learn_Cloudflare_Helper_Data extends Mage_Core_Helper_Abstract {
	
	const XML_CLOUDFLARE_ENABLE   				= 'cloudflare_settings/settings/enable_cloudflare';
	const XML_CLOUDFLARE_EMILID 				= 'cloudflare_settings/settings/email_id';
	const XML_CLOUDFLARE_APIKEY  				= 'cloudflare_settings/settings/api_key';
	const XML_CLOUDFLARE_ZONEID  				= 'cloudflare_settings/settings/zone_id';
	const XML_CLOUDFLARE_SECURITY_PROFILE  		= 'cloudflare_settings/settings/security_profile';
	const XML_CLOUDFLARE_DEVELOPMEMT_MODE  		= 'cloudflare_settings/settings/development_mode';
	const XML_CLOUDFLARE_CACHING_LEVEL  		= 'cloudflare_settings/settings/caching_level';
	const XML_CLOUDFLARE_AUTO_MINIFY  			= 'cloudflare_settings/settings/auto_minify';
	const XML_CLOUDFLARE_SSL 					= 'cloudflare_settings/settings/ssl';
	const XML_CLOUDFLARE_ALWAYS_ONLINE			= 'cloudflare_settings/settings/always_online';
	const XML_CLOUDFLARE_ROCKET_LOADER			= 'cloudflare_settings/settings/rocket_loader';
	const XML_CLOUDFLARE_IPV6					= 'cloudflare_settings/settings/ipv6';
	const XML_CLOUDFLARE_WEBSOCKETS				= 'cloudflare_settings/settings/websockets';
	const XML_CLOUDFLARE_IPGEOLOCATION			= 'cloudflare_settings/settings/ip_geolocation';
	const XML_CLOUDFLARE_FLUSH  				= 'cloudflare_settings/settings/flush';
	
	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	
	public function cloudflare_enable($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_ENABLE, $store);
	}
	
	public function cloudflare_email_id($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_EMILID, $store);
	}
		
	public function cloudflare_api_key($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_APIKEY, $store);
	}
		
	public function cloudflare_zone_id($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_ZONEID, $store);
	}
	
	public function cloudflare_security_profile($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_SECURITY_PROFILE, $store);
	}
		
	public function cloudflare_development_mode($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_DEVELOPMEMT_MODE, $store);
	}

	public function cloudflare_caching_level($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_CACHING_LEVEL, $store);
	}
	
	public function cloudflare_auto_minify($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_AUTO_MINIFY, $store);
	}
	
	public function cloudflare_ssl($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_SSL, $store);
	}
		
	public function cloudflare_always_online($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_ALWAYS_ONLINE, $store);
	}
		
	public function cloudflare_rocket_loader($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_ROCKET_LOADER, $store);
	}
		
	public function cloudflare_ipv6($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_IPV6, $store);
	}
		
	public function cloudflare_websockets($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_WEBSOCKETS, $store);
	}
		
	public function cloudflare_ip_geolocation($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_IPGEOLOCATION, $store);
	}
	
	public function cloudflare_flush($store = null) {
		return $this->conf(self::XML_CLOUDFLARE_FLUSH, $store);
	}
}