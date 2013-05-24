<?php
OBJECTS
Compliance inspections
 -- Determine compliance status(regulations,permit conditions,other requirements)
 -- Information Accuracy(submission by permittesss)
 -- Sampling Accuracy(Permitee)
  -- monitoring Acuracy(permitee)

Enforcement class {
  $actions = array()
	$who enforces
	$who is regulated
}

Permissions class {
	$process = array()
	$information = array()
}

class compliance {
	_protected method assessment(orders,consent decrees);
	protected $_compliancePersonnel;
}

class inspector{
	private $_inspectionType;
	private $_inspectionActivities = Array();
	

	public method assessment($permit,$selfmonitoringData);
	public method reliabilityAssessment($selfmonitoringData);
	public method complianceEvaluation($permitConditions,$applicableRegulations,$others);
	
}

class InspectionActivities extends Activity{
	//This class should only be accessible to the Inspectiontype class
	private $_inspectionType;
	private $_activities;
}
abstract class Inspections {
	public const NSPDES = 'National pollutant discharge elimination system';
	public const CEI = 'Compliance evaluation inspection';
	public const CSI = 'Compliance sampling inspection';
	public const PAI = 'Performance audit inspection';
	public const CBI = 'Compliance biomonitoring inspection';
	public const TSI = 'Toxic sampling inspection';
	public const DI = 'Diagnostic inspection';
	public const RI = 'Reconnaissance inspection';
	public const PCI = 'Pretreatment compliance inspection';
	public const FI = 'Follow up inspection'; 
	public const SSI = 'Sewage sludge inspection';
	public const SWI = 'Storm water inspection';
	public const CSO = 'Combined sewer overflow inspection';
	public const SSO = 'Sanitary sewer overflow inspection';
	public const CAFO = 'Concentrated animal feeding overflow inspection';
	private $_projectID;
	private $_inspectionActivities;
	private $_inspectionLocation;
	private $_inspectionInformation;
	private $_legalAuthority = array();
	//An array of permit objects.
	private $_permit ;
	//An array of operating condition objects
	private $_operatingCondition;

	public method assessment($permit,$selfmonitoringData);
	public method reliabilityAssessment($selfmonitoringData);
	public method complianceEvaluation($permitConditions,$applicableRegulations,$others);



}

abstract class ComplianceMonitoring extends Inspections{
	//Array of inspection type
	private _$inspectionType = array(
		"TYPE_A" =>"selfMonitoring" ,
		"TYPE_B" => "NESREA"
	);

	

	public method assessment($permit);

}
class Facility{
	public const PERMITTED = 1;
	public const UNPERMITTED = 0;
	private $_permit;
}

class CompliancePersonnel{

}
class LegalAuthorityModel{
	//Name eg Federal water pollution act
	private $_name;
	private $_year;
	private $_statement;
	private $_description;
	private $_authorityGiven = array();
	private $_sections = array();
	

}
class Model_LegalAuthority_InpectionType{
	private $_inspectionTypeID;
	private $_legalAuthority;
}

class Controller_LegalAuthority{
	//Name eg Federal water pollution act
	private $_name;
	private $_year;
	private $_statement;
	private $_description;
	private $_authorityGiven = array();
	private $_sections = array();
	private $_inspectionTypes = array();
	private $_whereApplicable; //GIS LAYER
	

}

class Model_Permit{
	private $_name;
	private $_description;
	private $_issuer;
	private $_enforcer;
	private $_requirements;
	
	
}
class Controller_Permit{
	private $_name;
	private $_description;
	//Array of permit items
	private $_item = array();
	//Array of operating conditions
	private $_ConditionItems = array();
	
	
}

class Model_Permit_Limits{
	private $_permitID;
	private $_item;
}

class Model_Permit_OperatingCondition{
	private $_permitID;
	private $_conditions;
}

class Enforcement{
		private $_projectID;
}

abstract class Activities{
	private $name;
	private $_period;
	private $_date;
	//Activity type eg compliance monitoring, inspections
	private $_type;
	
}

abstract class Project{
	private $duration;
	private $startDate;
	private $_endDate;
	private $_userID;
	//Array of activity object
	private $_activities
	private $_milestone
	private $_status;
	private $_objectives;
	
}

class Milestone{
	private $_projectID;
	private $_activities;
	private $_segments;
	
	
}

class Segment{
	private $_milestoneID;
	private $_SegmentObjectives;
}
class Milestone_Segment{
	private $_MilestoneID;
	private $_segmentID
}

class Segment_Activities extend Activities{
	private $_segmentID;
	private $_activities;
}

class Segment{
	private $_MilestoneID;
	private $_activities;
	private $_status;//Notstarted,Ongoing, completed
}
class Model_Project_Milestones{
	private $_projectID;
	private $_taskDescription
	private $_milestones;
}

class CaseDevelopment extends Project{
	private $_inspections;
	private $_Evidence;
	
}

class Procedures{
	//Start of procedure
	private $_index;
	private $_end;
	private $_taskPosition;
	private $_name;
	private $_descripton;
	//The project where the procedure is carried out
	private $_project;
	private $_procedureTasks;
	private $_procedureTasksActivities;
	
}

class EvidenceofNonCompliance{
	$private $_inspections;
	public method getEvidence($inspections)
}

class ComplianceInformation{
	$_outofComplianceFacilities;

	public function getOutofComplianceFacilities()
}

class InspectionProcedure extends procedure{
	private $_preInspectionPreparation; // ALL extends InspectionActivities
	private $_offsiteSurveillance; //Page 56
	private $_entry;
	private $_openingConference;
	private $_FacilityInspection;
	private $_closingConference;
	private $_InspectionReport;
}

class InspectionResponsibility{
	private $_preInspectionPreparation; // ALL extends InspectionActivities
	private $_entry;
	private $_openingConference;
	private $_FacilityInspection;
	private $_closingConference;
	private $_InspectionReport;
	private $_evidenceCollection;
	private $_trianing;
	private $_safety;
	private $_professional;
	private $_professionalAttitude;
	private $_qualityAssurance;
}

class PreInspectionPreparation extends Activities{
	private $_facilityBackgroundInformationReview;
	private $_DevelopmentOfInspectionPlan;
	private $_facilityNotification;
	private $_stateNotification;
	private $_equipmentPreparation;
	
}

class entryTask extends Task{//Inspection entry class
	private $_procedure = array(
	private $_authority,
	private $_arrival,
	private $_credentials,
	private $_consent,
	private $consentReluctance) //
}

class OpeningConferenceTask extends Task{
	private $_considerations = array(page 62 -64)
}

class FacilityInspection extends Activities{
	
}
class InspectionDocumentation{
	
}

class ClosingConferenceTask extends Task{
	
}

class InspectionReport extends Activities{
	
}

class FacilityInformation{
	//maps,plantlayout and process flow diagram, name title etc -- page 47
	private $_generalFacilityInformation;
	private $_requirements_regulations_limitations;
	private $_facilityCompliance_EnforcementHistory;
	private $_pollutionControl_TreatmentSytems;
	private $_preTreatmentInformation;
	private $_informationSource; // page 50

}

class InspectionPlan extends Project{ //Page 51
	
	private $_objectives;
	private $_tasks;
	private $_procedures;
	private $_resources;
	private $_schedule;
	private $_coordination;
}

class InspectionReport extends task{
	private $_objectives;
	private $_informationChecklist;//page 80
	private $_permitViolations = array('name of permit' => 'violations');
	private $_violationReportGuide;
	private $_title;
	private $_dateWritten;
	private $_reportTechniques;//PAGE 81
	private $_reportElements //82
}

abstract class RegulatoryRequirement{
	private $_item;
}

class TechnologyRequirement extends RegulatoryRequirement{
	
}

class PerformanceRequirement extends RegulatoryRequirement{
	
}

class recordKeeping extends RegulatoryRequirements{
	

	protected function facilityRecordReview($facilityData,$permit){
		isFacilityVerifyingData($facilityData,$permit)
		$requiredInfo = getRequiredInformation($facilityData) ? TRUE: FALSE;
		$infoCurrentStatus = isCurrent($data) ? TRUE : FALSE;
		$infoMaintanance($data,$requiredTimePeriod) ? true : false;
		$areasForFurtherInvestigation = getAreasforFurtherInvestigation($facilityRecord) ? true : false;
		$areRecordsOrganized = isOrganized($facilityRecord) ? true : false;
		$complianceStatus = complianceStatus($record) ? true : false;
		
		
		
	}
}

?>
