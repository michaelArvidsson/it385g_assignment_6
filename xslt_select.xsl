<?xml version="1.0" encoding="utf-8"?>
 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:template match="/">
  <h1 id='head'>Newspaper article database</h1>
    <form method="post" action="responseXSLT.php">
      <label style="margin-right:10px">Select Newspaper</label>
      <select name="paper">
          <option value=''>---</option>
          <xsl:apply-templates/>
      </select>
      <button style='margin-left:10px'>Show result!</button>
    </form>
  </xsl:template>
  <!-- Template for matching type attribute -->
  <xsl:template match="NEWSPAPER[@TYPE='Morning_Edition']">
    <option value="Morning_Edition">
        <xsl:value-of select="@NAME"/>
    </option>
  </xsl:template>

  <xsl:template match="NEWSPAPER[@TYPE='Evening_Edition']">
    <option value="Evening_Edition">
        <xsl:value-of select="@NAME"/>
    </option>
  </xsl:template>
</xsl:stylesheet>