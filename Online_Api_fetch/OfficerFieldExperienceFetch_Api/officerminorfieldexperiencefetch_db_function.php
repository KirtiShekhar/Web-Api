<?php

/* service to query and fetch the data */

include('officerfieldexperiencefetch_db_config.php');

function officerminorfieldexperiencefetch_display_all_field_fisheries_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencefisheriesresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS FisheriesExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Fisheries')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencefisheriesresult;
}

function officerminorfieldexperiencefetch_display_all_field_chemicals_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencechemicalsresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS ChemicalsExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Chemicals')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencechemicalsresult;
}

function officerminorfieldexperiencefetch_display_all_field_enqueries_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceenqueriesresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS EnquiriesExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Enquiries')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceenqueriesresult;
}

function officerminorfieldexperiencefetch_display_all_field_LandRevenueMngt_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencelandrevenuemanagementresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS LandRevenueManagementExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Land Revenue Mgmt & District Admn')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencelandrevenuemanagementresult;
}

function officerminorfieldexperiencefetch_display_all_field_lawandjustice_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencelawjusticeresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS LawJusticeExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Law & Justice')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencelawjusticeresult;
}

function officerminorfieldexperiencefetch_display_all_field_petroleum_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencepetroleumresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS PetroleumExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Petroleum & Natural Gas')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencepetroleumresult;
}

function officerminorfieldexperiencefetch_display_all_field_environment_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceenvironmentresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS EnvironmentExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Environment & Forests')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceenvironmentresult;
}

function officerminorfieldexperiencefetch_display_all_field_consumeraffairs_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceconsumeeraffairsresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS ConsumerAffairsExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Consumer Affairs, Food & PD')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceconsumeeraffairsresult;
}

function officerminorfieldexperiencefetch_display_all_field_informationtechnology_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceinformationtechnologyresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS InformationTechnologyExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Information & Broadcasting')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceinformationtechnologyresult;
}

function officerminorfieldexperiencefetch_display_all_field_planning_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceplanninrresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS PlanningExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Planning')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceplanninrresult;
}

function officerminorfieldexperiencefetch_display_all_field_socialwelfare_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencesocialwelfareresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS SocialWelfareExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Social Welfare')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencesocialwelfareresult;
}

function officerminorfieldexperiencefetch_display_all_field_Commerce_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceCommerceresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS CommerceExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Commerce')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceCommerceresult;
}

function officerminorfieldexperiencefetch_display_all_field_ParliamentaryAffairs_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceParliamentaryAffairsresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS ParliamentaryAffairsExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Parliamentary Affairs')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceParliamentaryAffairsresult;
}

function officerminorfieldexperiencefetch_display_all_field_CommunicationAndInformationTechnology_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceCommunicationAndInformationTechnologyresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS CommunicationAndInformationTechnologyExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Communications & Information Technology')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceCommunicationAndInformationTechnologyresult;
}

function officerminorfieldexperiencefetch_display_all_field_Defence_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceDefenceresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS DefenceExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Defence')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceDefenceresult;
}

function officerminorfieldexperiencefetch_display_all_field_Home_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceHomeresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS HomeExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Home')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceHomeresult;
}

function officerminorfieldexperiencefetch_display_all_field_SubDivisionalAdministration_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceSubDivisionalAdministrationresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS SubDivisionalAdministrationExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Sub Divisional Admn')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceSubDivisionalAdministrationresult;
}

function officerminorfieldexperiencefetch_display_all_field_HumanResourceDevelopment_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceHumanResourceDevelopmentresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS HumanResourceDevelopmentExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Human Resource Dev')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceHumanResourceDevelopmentresult;
}

function officerminorfieldexperiencefetch_display_all_field_Culture_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceCultureresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS CultureExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Culture')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceCultureresult;
}

function officerminorfieldexperiencefetch_display_all_field_Energy_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceEnergyresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS EnergyExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Energy')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceEnergyresult;
}

function officerminorfieldexperiencefetch_display_all_field_ExternalAffairs_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceExternalAffairsresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS ExternalAffairsExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'External Affairs')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceExternalAffairsresult;
}

function officerminorfieldexperiencefetch_display_all_field_Finance_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceFinanceresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS FinanceExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Finance')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceFinanceresult;
}

function officerminorfieldexperiencefetch_display_all_field_HealthAndFamilyWelfare_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceHealthAndFamilyWelfareresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS HealthAndFamilyWelfareExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Health & Family Welfare')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceHealthAndFamilyWelfareresult;
}

function officerminorfieldexperiencefetch_display_all_field_Industries_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceIndustriesresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS IndustriesExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Industries')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceIndustriesresult;
}

function officerminorfieldexperiencefetch_display_all_field_LabourAndEmployment_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceLabourAndEmploymentresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS LabourAndEmploymentExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Labour & Employment')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceLabourAndEmploymentresult;
}

function officerminorfieldexperiencefetch_display_all_field_MinesAndMinerals_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceMinesAndMineralsresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS MinesAndMineralsExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Mines & Minerals')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceMinesAndMineralsresult;
}

function officerminorfieldexperiencefetch_display_all_field_localselfgoverment_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencelocalselfgovermentresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS LocalSelfGovermentExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Local Self Govt')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencelocalselfgovermentresult;
}

function officerminorfieldexperiencefetch_display_all_field_publicworks_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencepublicworksresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS PublicWorksExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Public Works')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencepublicworksresult;
}

function officerminorfieldexperiencefetch_display_all_field_ruraldevelopment_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceruraldevelopmentresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS RuralDevelopemntExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Rural Dev')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceruraldevelopmentresult;
}

function officerminorfieldexperiencefetch_display_all_field_ScienceAndTechnology_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceScienceAndTechnologyresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS ScienceANdTechnologyExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Science & Technology')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceScienceAndTechnologyresult;
}

function officerminorfieldexperiencefetch_display_all_field_Transport_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceTransportresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS TransportExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Transport')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceTransportresult;
}

function officerminorfieldexperiencefetch_display_all_field_StaffOfficers_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceStaffOfficersresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS StaffOfficersExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Staff Officers')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceStaffOfficersresult;
}

function officerminorfieldexperiencefetch_display_all_field_Textiles_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceTextilesresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS TextilesExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Textiles')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceTextilesresult;
}

function officerminorfieldexperiencefetch_display_all_field_tourism_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceTourismresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS TourismExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Tourism')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceTourismresult;
}

function officerminorfieldexperiencefetch_display_all_field_urbandevelopment_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceWomanUrbanDevelopmentresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS UrbanDevelopemntExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Urban Development')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceWomanUrbanDevelopmentresult;
}

function officerminorfieldexperiencefetch_display_all_field_waterresource_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceWomanwaterresourceresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS WaterResourcesExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Water Resources')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceWomanwaterresourceresult;
}

function officerminorfieldexperiencefetch_display_all_field_WomenAndChildDev_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceWomanChildDevelopmentresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS WomenAndChildDevExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Women & Child Dev')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceWomanChildDevelopmentresult;
}

function officerminorfieldexperiencefetch_display_all_field_YouthAffairsAndSports_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceyouthaffairsresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS YouthAffairsAndSportsExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Youth Affairs & Sports')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceyouthaffairsresult;
}

function officerminorfieldexperiencefetch_display_all_field_DevelopmentofNER_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencedevelopementofnerresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS DevelopmentofNERExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Development of NER')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencedevelopementofnerresult;
}

function officerminorfieldexperiencefetch_display_all_field_CorporateManagement_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencecorporatemanagementresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS CorporateManagementExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Corporate Management (New)')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencecorporatemanagementresult;
}

function officerminorfieldexperiencefetch_display_all_field_PublicAdministration_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencepublicadministrationresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS PublicAdministrationExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Public Administration')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencepublicadministrationresult;
}

function officerminorfieldexperiencefetch_display_all_field_publicpolicy_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencepublicpolicyresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS PublicPolicyExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Public Policy')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencepublicpolicyresult;
}

function officerminorfieldexperiencefetch_display_all_field_Training_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencetrainingresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS TrainingExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Training')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencetrainingresult;
}

function officerminorfieldexperiencefetch_display_all_field_mailamanagement_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceMailManagementresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS MailManagementExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Mail Management')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceMailManagementresult;
}

function officerminorfieldexperiencefetch_display_all_HumanTrafficking_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceHumanTraffickingresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS HumanTraffickingExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Human Trafficking')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceHumanTraffickingresult;
}

function officerminorfieldexperiencefetch_display_all_field_ProjectManagement_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceprojectmanagementresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS ProjectManagementExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Project Appraisal and Risk Management')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceprojectmanagementresult;
}

function officerminorfieldexperiencefetch_display_all_field_cyberlaw_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencecyberlawresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS CyberLawExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'Cyber Law')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencecyberlawresult;
}

function officerminorfieldexperiencefetch_display_all_field_NA_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperienceNAresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS NAExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'N.A.')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperienceNAresult;
}

function officerminorfieldexperiencefetch_display_all_field_NotAvailable_experience_names()
{
	global $officerfieldexperience_connection;

	$officerminorfieldexperiencenotavailableresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MinorExperienceDescription AS NotAvailableExperience FROM jse_cf_fieldexperience_minor WHERE MajorCode IN (SELECT MajorCode FROM jse_cf_fieldexperience_minor WHERE MinorExperienceDescription = 'N.Applicable\/N.Available')") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerminorfieldexperiencenotavailableresult;
}

?>