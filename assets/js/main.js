/* Web II Project 1 */

/* Responsive Functions */
var navTabs = document.getElementById('navTabs');
var pageWrapper = document.getElementById('pageWrapper');

function getNavTabsHeight()
{
	return navTabs.clientHeight + 'px';
}

function toggleNavTabs()
{
	if (navTabs.style.display == 'block')
	{
		setTimeout(function(){navTabs.style.display = 'none'}, 200);
	}
	else
	{
		navTabs.style.display = 'block';
	}
}

function toggleNavMenu()
{
	if (pageWrapper.className == 'navMenu-collapsed')
	{
		pageWrapper.className = 'navMenu-toggled';
		pageWrapper.style.paddingTop = getNavTabsHeight();
	}
	else
	{
		pageWrapper.className = 'navMenu-collapsed';
		pageWrapper.style.paddingTop = '0px';
	}
}

document.getElementById('navMenu').addEventListener('click', function () {
	toggleNavTabs();
	toggleNavMenu();
});