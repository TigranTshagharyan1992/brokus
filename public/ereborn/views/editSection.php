<?php
	if( !defined("APP") )
	{
		exit("ERROR");
	}
?>
<div class="form position-relative top-pad">
	<?php
		$eid = (string)filter_input(INPUT_GET, "eid", FILTER_VALIDATE_INT);
		$page = (string)filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);
		if($eid!=="" && $page!=="")
		{
			$entity = getEntity($eid);
			
			if($entity!==false)
			{
				if(USER_TYPE==="AUTHOR" && $entity["entity_role"])
				{
					if( !in_array($entity["entity_role"], getUserRoles($_SESSION["user"])) )
					{
						metaRefresh($_SERVER["SCRIPT_NAME"]);
					}
				}
				
				define("SECTION_LINK", "?editSection&eid=".$entity["entity_id"]."&page=".$page);
				
				if( isset($_POST["delete"]) )
				{
					if($entity["entity_removable"]===1)
					{
						wipeEntity($entity["entity_id"]);
						
						metaRefresh("?sections&pid=".$entity["entity_parent"]."&page=".$page);
					}
					else
					{
						metaRefresh(SECTION_LINK);
					}
				}
				elseif( isset($_POST["update"]) )
				{
					$entityTemplate = searchTemplate($entity["entity_type"]);
					if($entityTemplate!==false)
					{
						if( isset($entityTemplate["onUpdate"]) && is_callable($entityTemplate["onUpdate"]) )
						{
							$entityTemplate["onUpdate"]($entity["entity_id"]);
						}
					}
					
					saveTemplate($entity["entity_id"]);
					
					saveGalleryData($entity["entity_id"]);
					
					saveGallery($entity["entity_id"]);
					
					saveFields($entity["entity_id"], $seoFields);
					
					saveHistory($entity["entity_id"]);
					
					saveOrder($entity["entity_id"]);
					
					if(USER_TYPE==="ROOT" || USER_TYPE==="ADMIN")
					{
						saveRole($entity["entity_id"]);
					}
					
					saveVisibility($entity["entity_id"]);
					
					if(USER_TYPE==="ROOT")
					{
						saveParent($entity["entity_id"]);
						
						saveRemovable($entity["entity_id"]);
					}

					if($entityTemplate!==false)
					{
						if( isset($entityTemplate["afterUpdate"]) && is_callable($entityTemplate["afterUpdate"]) )
						{
							$entityTemplate["afterUpdate"]($entity["entity_id"]);
						}
					}

					metaRefresh(SECTION_LINK);
				}
				elseif( isset($_GET["file"]) && is_string($_GET["file"]) )
				{
					if( ctype_digit($_GET["file"]) )
					{
						delGalleryFile($entity["entity_id"], $_GET["file"]);
						
						metaRefresh(SECTION_LINK);
					}
					else
					{
						$entityTemplate = searchTemplate($entity["entity_type"]);
						if($entityTemplate!==false)
						{
							foreach($entityTemplate["fields"] as $field)
							{
								if( ($field["type"]==="image" || $field["type"]==="file") && $field["name"]===$_GET["file"] )
								{
									$fieldPrefix = parseColumnPrefix($field["name"]);
									
									$tableName = getTableName($fieldPrefix);
									
									if(isMultiLang($tableName))
									{
										if( isset($_GET["language"]) && is_string($_GET["language"]) && ctype_digit($_GET["language"]) && isValidLanguageId($_GET["language"]) )
										{
											delFileAtLang($field["name"], $entity["entity_id"], $_GET["language"]);
										}
									}
									else
									{
										delFileAt($field["name"], $entity["entity_id"]);
									}
									
									metaRefresh(SECTION_LINK);
								}
							}
						}
					}
				}
				
				$selectedTemplate = false;
				
				if( isset($_GET["tpl"]) && is_string($_GET["tpl"]) )
				{
					$selectedTemplateId = $_GET["tpl"];
				}
				else
				{
					$selectedTemplateId = $entity["entity_type"];
				}
				
				foreach($templates as $template)
				{
					if($template["id"]===$selectedTemplateId)
					{
						$selectedTemplate = $template;
					}
				}
				?>

					<section id="welcome" class="tm-section tabs-wrapper">
						<form action="<?php echo SECTION_LINK ?>" method="post" class="contact-form  position-relative" enctype="multipart/form-data">
							<div class="top-section-funktional">
								<div style="display: flex;">
									<div class="burger">
										<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 11.4477 2.44772 11 3 11H21C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12Z" fill="#3558A2"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 5.44772 2.44772 5 3 5H21C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6Z" fill="#3558A2"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2 18C2 17.4477 2.44772 17 3 17H21C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18Z" fill="#3558A2"/>
										</svg>
									</div>
									<a href="<?php echo $_SERVER["SCRIPT_NAME"]."?sections&pid=".$entity["entity_parent"]."&page=".$page ?>" class="south-east btn blue"><span>Back</span> <img src="img/back.png" alt=""></a>
								</div>
								<div>
									<button type="submit" name="update" class="tm-button btn green"><span>Save</span> <img src="img/x-square2.png" alt=""></button>
									<?php
										if($entity["entity_removable"]===1)
										{
											?>
												&nbsp;&nbsp;&nbsp;<div class="deleteButton-fake btn red" id="delete"><span>Delete</span> <img src="img/x-square1.png" alt=""></div>
												<button type="submit" hidden name="delete" class="deleteButton btn red"><span>Delete</span> <img src="img/x-square1.png" alt=""></button>
											<?php
										}
									?>
								</div>
							</div>
							<section class="tabs-section">
								<?php
									if($selectedTemplate!==false)
									{
										?>
											<section class="tab">
												<div class="tabs-title">Fields</div>
												<div class="fieldRow">
													<?php
														foreach($selectedTemplate["fields"] as $templateField)
														{
															printFormField($templateField, $entity);
														}
													?>
												</div>
											</section>
											<?php
												if($selectedTemplate["hasGallery"])
												{
													?>
														<section class="tab">
															<div class="tabs-title">Gallery</div>
															<div class="fieldRow">												
																<div class="inputFile align-mid">
																	<div class="file-img-container align-center">
																		<div class="file-img-title">
																			Upload photo <img src="img/upload-cloud.png" alt="">
																		</div>
																		<div class="file-img" style="">
																		
																		</div>
																		<input class="form-control" type="file" multiple name="gallery[]">					
																	</div>
																</div>
																<table   id="gallery" class="gallery pickedData">
																	<tbody>
																		<?php
																			$gallery = getGallery($entity["entity_id"]);
																			
																			foreach($gallery as $photo)
																			{
																				if( is_file($photo["eg_path"]) )
																				{
																					?>
																						<tr class="galleryPhoto" id="<?php echo $photo["eg_id"] ?>">																								
																							<?php
																								$bgStyle = "";
																								
																								if( isValidImage($photo["eg_path"]) )
																								{
																									$bgStyle = "background-image:url('".$photo["eg_path"]."')";
																								}
																							?>
																							<td class="input-sections" style="min-width: 90px;text-align: center;padding-right: 30px;">
																								<div class="file-img-container">
																									<div class="file-img imageColumn align-center" style="<?php echo $bgStyle ?>">
																										<?php
																											if( isValidFile($photo["eg_path"]) )
																											{
																												?>
																													<a href="<?php echo $photo["eg_path"] ?>" class="fileExtension" target="_blank"><?php echo pathinfo($photo["eg_path"], PATHINFO_EXTENSION) ?></a>
																												<?php
																											}
																											else
																											{
																												?>
																													<div>&nbsp;</div>
																												<?php
																											}
																										?>
																									</div>
																								</div>
																							</td>
																							<td class="input-sections">
																								<div>
																									<div>
																										<div class="flex-wrapper align-justify ">
																											<div >
																												
																											</div>
																											<div class="language-wrapper">
																												<?php
																													foreach($languages as $ind=>$language)
																													{
																														$checked = "";
																														if($ind===0)
																														{
																															$checked = "checked='checked'";
																														}
																														?>
																															<div class="langSwitch">
																																<input <?php echo $checked ?> type="radio" id="radio_<?php echo $photo["eg_id"]."_".$ind ?>" name="radio_<?php echo $photo["eg_id"] ?>"><label for="radio_<?php echo $photo["eg_id"]."_".$ind ?>"><?php echo $language["language_url"] ?></label>
																															</div>
																														<?php
																													}
																												?>
																											</div>
																										</div>
																										<div class="inputTd">
																											<?php
																												foreach($languages as $ind=>$language)
																												{
																													?>
																														<input type="text" name="gallery_<?php echo $photo["eg_id"]."_".$ind ?>" class="form-control" value="<?php echo findInGalleryData($photo["entity_gallery_lang"], $language["language_id"])?htmlspecialchars(findInGalleryData($photo["entity_gallery_lang"], $language["language_id"]), ENT_QUOTES):'' ?>" />
																													<?php
																												}
																											?>
																										</div>
																									</div>
																								</div>
																							</td>
																							<td class="img-upload-other">
																								<div class="moving" ></div>
																							</td>	
																							<td class="img-upload-other">
																								<a  class="deliteSection" href="<?php echo SECTION_LINK."&file=".$photo["eg_id"] ?>"></a>
																								<input type="hidden" name="galleryOrder[]" value="<?php echo $photo["eg_id"] ?>" />
																							</td>
																						</tr>
																					<?php
																				}
																			}
																		?>
																	</tbody>
																</table>
															</div>
														</section>
													<?php
												}
												
												if($selectedTemplate["hasSeo"])
												{
													?>
														<section class="tab">
															<div class="tabs-title">SEO</div>
															<div class="fieldRow">
																
																<?php
																	foreach($seoFields as $seoField)
																	{
																		printFormField($seoField, $entity);
																	}
																?>
															</div>
														</section>
													<?php
												}
												
												$wordEntity = $entity["entity_id"];
												if( isset($wordsMap[$wordEntity]) )
												{
													?>
													<section class="tab">
														<div class="tabs-title">Words</div>
														<div class="fieldRow">
															<?php
																foreach($wordsMap[$wordEntity] as $wordIndex=>$wordLabel)
																{
																	$fieldName = "words_".$wordIndex;
																	?>
																		<div class="input-sections">
																			<div class="flex-wrapper align-justify">
																				<div class="title"><?php echo $wordLabel ?><sub>(<?php echo $wordIndex ?>)</sub></div>
																				<div class="language-wrapper">
																					<?php
																						foreach($languages as $ind=>$language)
																						{
																							$checked = "";
																							if($ind===0)
																							{
																								$checked = "checked='checked'";
																							}
																							?>
																								<div class="langSwitch">
																									<input <?php echo $checked ?> type="radio" id="radio_<?php echo $fieldName."_".$ind ?>" name="radio_<?php echo $fieldName ?>"><label for="radio_<?php echo $fieldName."_".$ind ?>"><?php echo $language["language_url"] ?></label>
																								</div>
																							<?php
																						}
																					?>
																				</div>
																			</div>
																			<div class="inputTd">
																			<?php
																				foreach($languages as $language)
																				{
																					$fieldValue = "";
																					
																					foreach($entity["entity_words"] as $entityWord)
																					{
																						if($entityWord["ew_index"]===$wordIndex && $entityWord["ew_lang"]===$language["language_id"])
																						{
																							$fieldValue = $entityWord["ew_value"];
																						}
																					}
																					?>
																						<input type="text" name="<?php echo $fieldName ?>[]" class="form-control" value="<?php echo htmlspecialchars($fieldValue, ENT_QUOTES) ?>" />
																					<?php
																				}
																			?>
																			</div>		
																		</div>
																	<?php
																}
															?>
														</div>
													</section>
													<?php
												}
											?>
											<section class="tab">
												<div class="tabs-title">Settings</div>
												<div class="fieldRow">
													<div class="input-sections">
														<div class="title">
															Template
														</div>
														<div class="inputTd select-element">
															<select name="template" class="form-control">
																<?php
																	foreach($templates as $template)
																	{
																		if($template["isWidget"]===false)
																		{
																			$selected = "";
																			
																			if($template["id"]===$selectedTemplateId)
																			{
																				$selected = "selected";
																			}
																			else
																			{
																				$pid = $entity["entity_parent"];
																				
																				if( isset($templateMap) && isset($templateMap[$pid]) )
																				{
																					if( !in_array($template["id"], $templateMap[$pid]) )
																					{
																						continue;
																					}
																				}
																				
																				$parentEntity = getEntity($entity["entity_parent"]);
																				if($parentEntity!==false)
																				{
																					$parentTemplate = $parentEntity["entity_type"];
																					
																					if( isset($templateChildren) && isset($templateChildren[$parentTemplate]) )
																					{
																						if( !in_array($template["id"], $templateChildren[$parentTemplate]) )
																						{
																							continue;
																						}
																					}
																				}
																			}
																			?>
																				<option <?php echo $selected ?> value="<?php echo $template["id"] ?>"><?php echo $template["title"] ?></option>
																			<?php
																		}
																	}
																?>
															</select>
														</div>
													</div>
													<div class="input-sections">
														<div class="title">
															Visibility
														</div>
														<div class="inputTd select-element">
															<select name="visibility" class="form-control">
																<?php
																	$visibilityOptions = array("Hidden", "Visible");
																	
																	foreach($visibilityOptions as $key=>$val)
																	{
																		$selected = "";
																		
																		if($entity["entity_visible"]===$key)
																		{
																			$selected = "selected";
																		}
																		
																		?>
																			<option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $val ?></option>
																		<?php
																	}
																?>
															</select>
														</div>
													</div>
														<?php
															if(USER_TYPE==="ROOT" || USER_TYPE==="ADMIN")
															{
																$roles = getRoles();
																if( count($roles) > 0 )
																{
																	?>
																	<div class="input-sections">
																		<div class="title">
																			Role
																		</div>
																		<div class="inputTd select-element">
																			<select name="role" class="form-control">
																				<option value="">None</option>
																				<?php
																					foreach($roles as $role)
																					{
																						$selected = "";
																						
																						if($role["role_id"]===$entity["entity_role"])
																						{
																							$selected = "selected";
																						}
																						
																						?>
																							<option <?php echo $selected ?> value="<?php echo $role["role_id"] ?>"><?php echo $role["role_name"] ?></option>
																						<?php
																					}
																				?>
																			</select>
																		</div>
																	</div>
																	<?php
																}
															}
															
															if(USER_TYPE==="ROOT")
															{
																?>
																<div class="input-sections">
																	<div class="title">
																		Parent
																	</div>
																	<div class="inputTd">
																		<input type="number" name="parent" class="form-control" value="<?php echo $entity["entity_parent"] ?>" min="0" step="1" />
																	</div>
																</div>
																<div class="input-sections">
																	<div class="title">
																		Removable
																	</div>
																	<div class="inputTd select-element">
																		<select name="removable" class="form-control">
																			<?php
																				$removableOptions = array("No", "Yes");
																				
																				foreach($removableOptions as $key=>$val)
																				{
																					$selected = "";
																					
																					if($entity["entity_removable"]===$key)
																					{
																						$selected = "selected";
																					}
																					
																					?>
																						<option <?php echo $selected ?> value="<?php echo $key ?>"><?php echo $val ?></option>
																					<?php
																				}
																			?>
																		</select>
																	</div>
																</div>
																<?php
															}
														?>
														<div class="input-sections">
															<div class="title">
																Order
															</div>
															<div class="inputTd">
																<input type="number" name="order" class="form-control" value="<?php echo $entity["entity_order"] ?>" min="0" step="1" />
															</div>
														</div>
												</div>
											</section>
										<?php
									}
								?>
							</section>
						</form>
					</section>
				<?php
			}
		}
	?>
</div>


<div class="delete-popup white-background-color">
		<div class="delete-popup-img top-bottom-marg">
			<img src="img/delit-mes.png" alt=""> 
		</div>
		<div class="delete-title">
			Are you sure You want TO delete this file?
		</div>
		<div class="delete-text">
			You will note be able to recover them
		</div>
		
		<div class="flex-wrapper align-justify">
			<div>
				<button type="submit" name="delete" class="deleteButton btn red">Delete <img src="img/x-square1.png" alt=""></button>			
			</div>
			<div>
				<button type="submit" name="delete" class="btn simple-btn">Cancel</button>			
			</div>
		</div>
		
</div>
